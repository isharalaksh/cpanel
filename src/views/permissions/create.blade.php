@extends(Config::get('cpanel::views.layout'))

@section('header')
    <h3>
        <i class="icon-ban-circle"></i>
        Permissions
    </h3>
@stop

@section('help')
    <p class="lead">Permission Inheritance</p>
    <p>
        Just as permissions are defined for groups and individual users, the permission inheritance model depends on a user's group.
        An Administrator can assign different permissions to a user that is assigned to a group, and if that group has different access permissions, the user's access is always determined by the group access.
    </p>
    <br>
    <p class="text-warning">
        Permission Inheritance only works for users permissions.
    </p>
     <p class="text-info">
        For more info visit <a href="http://docs.cartalyst.com/sentry-2/permissions" target="_blank">Sentry website</a>
    </p>
@stop

@section('content')
    <div class="row">
        <div class="span12">
            <div class="block">
                <p class="block-heading">Create new permissions for a module</p>
                <div class="block-body">
                    {{ Former::horizontal_open(route('cpanel.permissions.store')) }}
                    {{ Former::xlarge_text('name', 'Module Name')->required() }}
                    {{ Former::xlarge_text('premissions')->id('permission-tags')->required() }}
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('cpanel.permissions.index') }}" class="btn">Cancel</a>
                    </div>
                    {{ Former::close() }}
                </div>
            </div>
        </div>
    </div>
@stop