<?php

namespace App\Http\Controllers;

use App\Models\WorkingHour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkingHourController extends Controller
{
    public function GetIsAdmin()
    {
        return Auth::id() && Auth::user()->usertype = "1" ? true : false;
    }
    
    public function index(){
        $user = Auth::id() ? Auth::user() : null;
        $isAdmin = $this->GetIsAdmin();
        $workingHours = WorkingHour::all();
        return view('admin.pages.settings.working_hours.index', compact('workingHours', 'user', 'isAdmin'));

    }

public function edit()
{
    $workingHour = WorkingHour::all(); // جلب كل أيام العمل
    $user = auth()->user(); // المستخدم الحالي
    $isAdmin = $user->is_admin ?? false; // التحقق من الصلاحية

    return view('admin.pages.settings.working_hours.editworkinghours', compact('workingHour', 'user', 'isAdmin'));
}


public function update(Request $request, $id)
{
    // return $request;
    $validated = $request->validate([
        'is_open' => 'required|boolean',
        'open_at' => 'nullable|date_format:H:i',
        'close_at' => 'nullable|date_format:H:i',
    ]);



    $workingHour = WorkingHour::findOrFail($id);

    $workingHour->is_open = $validated['is_open'];

    if ($validated['is_open']) {
        $workingHour->open_at = $validated['open_at'] ?? null;
        $workingHour->close_at = $validated['close_at'] ?? null;
    } else {
        $workingHour->open_at = null;
        $workingHour->close_at = null;
    }

    $saved = $workingHour->save();  
    if (!$saved) {
        return back()->with('error', 'حدث خطأ أثناء حفظ البيانات');
    }

    return redirect()->route('working.hours')->with('success', 'تم تعديل ساعات العمل بنجاح.');
}



}
