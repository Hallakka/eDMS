<?php  

namespace App\Http\Controllers;

use App\Internals;
use App\InRoute;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use PDF;

class DocIdInController extends Controller  
{  

    public function display($id)
    {
        $internals = Internals::find($id);
        return view('livewire.files.iv.show', ['internals' => $internals], compact('internals'))
        ->with('inroute', InRoute::orderBy('id','desc')->where('dts_no', $id)->get());
    }

    public function edit($id)
    {
        $internals = Internals::find($id);
        return view('livewire.files.iv.edit', ['internals' => $internals], compact('internals'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
          'status' => 'required',
          'modified_by' => '',
          'modified_by_div_unit' => '',
    ]);
          $internals = Internals::find($id);
          $internals->status = $request->status;
          $internals->modified_by = Auth::user()->name;
          $internals->modified_by_div_unit = Auth::user()->div_unit;
          $internals->save();

            return redirect()->route('iv.index', $internals->id)
            ->with('success','Document status successfully updated.');
    }
    
    public function print($id)
      {
        $internals = Internals::find($id);
        return view('livewire.files.iv.print', ['internals' => $internals], compact('internals'));
      }

      public function createPDF($id) 
      {
        $internals = Internals::find($id);
        view()->share('internals',$internals);
        $path_header = public_path('images/ARTA-OP.png');
      $path_footer = public_path('images/footer-logo.jpg');
      $typehead = pathinfo($path_header, PATHINFO_EXTENSION);
      $typefoot = pathinfo($path_footer, PATHINFO_EXTENSION);
      $datahead1 = file_get_contents($path_header);
      $datahead2 = file_get_contents($path_header);
      $datafoot1 = file_get_contents($path_footer);
      $datafoot2 = file_get_contents($path_footer);
      $header_logo1 = 'data:image/'. $typehead . ';base64,'. base64_encode($datahead1);
      $header_logo2 = 'data:image/'. $typehead . ';base64,'. base64_encode($datahead2);
      $footer_logo1 = 'data:image/'. $typefoot . ';base64,'. base64_encode($datafoot1);
      $footer_logo2 = 'data:image/'. $typefoot . ';base64,'. base64_encode($datafoot2);
        
      $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true])
        ->loadView('livewire.files.iv.pdf', compact('internals', 'path_header', 'path_footer', 'datahead1', 'datahead2', 'datafoot1', 'datafoot2', 'header_logo1', 'header_logo2', 'footer_logo1', 'footer_logo2'));
      return $pdf->download('Document Routing Slip.pdf');
      }

    public function destroy(Request $request)
    {
        $doc = Internals::where('id',$request->id)->delete();
        return Response()->json($doc);
    }
}