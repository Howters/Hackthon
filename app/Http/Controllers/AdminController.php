<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $groups = Group::whereNotIn('name', ['Admin'])->get();

    return view('admin.adminDashboard', compact('groups'));
    }
    public function indexPar(Request $request)
    {
        $groups = Group::whereNotIn('name', ['Admin'])->get();
        

        return view('admin.adminParticipant', compact('groups'));
    }
    public function showPart($id)
    {
        $groups = Group::whereNotIn('name', ['Admin'])->get();
        $group = Group::findOrFail($id);

        return view('admin.adminview', compact('group', 'groups'));
    }
    public function searchPart()
    {
        $search_text = $_GET['query'];

    $groups = Group::where('name', 'LIKE', '%' . $search_text . '%')->get();

    return view('admin.adminSearch', compact('groups'));
    }
    public function searchDash()
    {
        $search_text = $_GET['query'];

        $groups = Group::where('name', 'LIKE', '%' . $search_text . '%')->get();

        return view('admin.adminSearchDash', compact('groups'));
    }
    public function sortAlpha()
    {
        $groups = Group::whereNotIn('name', ['Admin'])->orderBy('name')->get();

        return view('admin.adminParticipant', compact('groups'));
    }
    public function sortTime()
    {
        $groups = Group::whereNotIn('name', ['Admin'])->orderBy('created_at')->get();

        return view('admin.adminParticipant', compact('groups'));
    }
    public function filterVerified()
    {
        $groups = Group::whereNotIn('name', ['Admin'])
            ->where('bukti', '=', 1)
            ->get();

        return view('admin.adminParticipant', compact('groups'));
    }
    public function filterunVerified()
    {
        $groups = Group::whereNotIn('name', ['Admin'])
                        ->where('bukti', '=', 0)
                        ->get();

        return view('admin.adminParticipant', compact('groups'));
    }
    public function delete($id)
    {
        Group::destroy($id);

        return redirect (route('adminParticipant'));
    }

    public function verify(Request $request, $id)
    {
        $group = Group::findOrFail($id);
        $group->bukti = 1;
        $group->save();

        return redirect()->back();
    }
}
