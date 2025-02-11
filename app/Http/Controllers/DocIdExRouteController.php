<?php  

namespace App\Http\Controllers;

use App\Externals;
use App\ExRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Carbon\Carbon;
use PDF;

class DocIdExRouteController extends Controller  
{  

    public function display($id)
    {
        $externals = Externals::find($id);
        return view('livewire.files.ev.show', ['externals' => $externals], compact('externals'))
        ->with('exroute', ExRoute::orderBy('id','desc')->where('dts_no', $id)->get());
    }

    public function displayroute($dts_no)
    {
        $exroute = ExRoute::find($id);
        return view('livewire.files.ev.show', ['exroute' => $exroute], compact('exroute'));
    }

    public function edit($id)
    {
        $exroute = ExRoute::find($id);
        return view('livewire.files.forward.exroute.edit', ['exroute' => $exroute], compact('exroute'));
    }

    public function updateroute(Request $request, $id)
    {
        $request->validate([
            'action_req' => '',
            'due_date' => '',
            'modeoftrans' => '',
            'file_upload' => '',
            'sharepoint_link' => '',
            'note_comment_routed' => '',
    ]);
            $exroute = ExRoute::find($id);
            $exroute->action_req = $request->action_req;
            $exroute->due_date = $request->due_date;
            $exroute->modeoftrans = $request->modeoftrans;
            $exroute->file_upload = $request->file_upload;
            $exroute->sharepoint_link = $request->sharepoint_link;
            $exroute->note_comment_routed = $request->note_comment_routed;
            $exroute->save();

            return redirect()->route('ev.index', $exroute->dts_no)
            ->with('success','Route Details updated successfully!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'outgoing' => 'required',
            'note_comment_personnel' => '',
            'modified_at' => '',
            // 'sent_date' => 'required',
            // 'sent_time' => 'required',
    ]);
            $exroute = ExRoute::find($id);
            $exroute->status = $request->status;
            $exroute->outgoing = $request->outgoing;
            $exroute->note_comment_personnel = $request->note_comment_personnel;
            $exroute->modified_at = Carbon::now()->toDateTimeString();
            // $exroute->sent_date = $request->sent_date;
            // $exroute->sent_time = $request->sent_time;
            $exroute->save();

            return redirect()->route('ev.index', $exroute->dts_no)
            ->with('success','Document updated successfully!');
    }

    public function open(Request $request, $id)
    {
        $request->validate([
            'open_at' => '',
    ]);
            $exroute = ExRoute::find($id);
            $exroute->open_at = Carbon::now()->toDateTimeString();
            $exroute->save();

            return redirect()->route('ev.index', $exroute->dts_no);
    }

    public function print($id)
      {
        $externals = Externals::find($id);
        return view('livewire.files.forward.exroute.print', ['externals' => $externals], compact('externals'))
        ->with('exroute', ExRoute::orderBy('id','desc')->where('dts_no', $id)->get());
      }

    public function createPDF($id) 
    {
        $externals = Externals::find($id);
        return view('livewire.files.forward.exroute.print', ['externals' => $externals], compact('externals'))
        ->with('exroute', ExRoute::orderBy('id','desc')->where('dts_no', $id)->get());
        view()->share('exroute',$exroute);
            
        $pdf = PDF::loadView('livewire.files.forward.exroute.pdf', ['exroute' => $exroute]);
        return $pdf->download('route_history.pdf');
    }

    public function remove($id)
    {
        $exroute = ExRoute::find($id);
        $exroute->delete();
        return redirect()->route('ev.index', $exroute->dts_no)
        ->with('Route Deleted Successfully.');
    }

    public function destroy(Request $request)
    {
        $doc = Externals::where('id',$request->id)->delete();
        return Response()->json($doc);
    }
}