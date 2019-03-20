
/* Auto-generated admin routes */
Route::{!! config('admin-generator.admin_url_prefix') === '/' ? '' : "prefix('" .trim(config('admin-generator.admin_url_prefix'), '/') . "')->"!!}middleware(['auth:' . config('admin-auth.defaults.guard'), 'admin'])->group(function () {
    {!! str_pad("Route::get('/".$resource."',", 60) !!}'{{ $controllerPartiallyFullName }}@index');
    {!! str_pad("Route::get('/".$resource."/create',", 60) !!}'{{ $controllerPartiallyFullName }}@create');
    {!! str_pad("Route::post('/".$resource."',", 60) !!}'{{ $controllerPartiallyFullName }}@store');
    {!! str_pad("Route::get('/".$resource."/{".$modelVariableName."}/edit',", 60) !!}'{{ $controllerPartiallyFullName }}@edit')->name('admin/{{ $resource }}/edit');
    {!! str_pad("Route::post('/".$resource."/{".$modelVariableName."}',", 60) !!}'{{ $controllerPartiallyFullName }}@update')->name('admin/{{ $resource }}/update');
    {!! str_pad("Route::delete('/".$resource."/{".$modelVariableName."}',", 60) !!}'{{ $controllerPartiallyFullName }}@destroy')->name('admin/{{ $resource }}/destroy');
@if($export)
    {!! str_pad("Route::get('/".$resource."/export',", 60) !!}'{{ $controllerPartiallyFullName }}@export')->name('admin/{{ $resource }}/export');
@endif
    {!! str_pad("Route::get('/".$resource."/{".$modelVariableName."}/resend-activation',", 60) !!}'{{ $controllerPartiallyFullName }}@resendActivationEmail')->name('admin/{{ $resource }}/resendActivationEmail');
});