<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Student') }}
        </h2>
    </x-slot>

<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="action-button float-right">
                        <a href="{{route('student.list')}}" class="btn btn-sm btn-dark"><i class="fa fa-list">{{__('List')}}</i></a>
                    </div>
                </div>
                <form method="POST" action="{{route('student.store')}}" enctype="multipart/form-data">
                    <div class="card-body">
                        @csrf
                        @include ('student.form',['student'=>null ,'teachersList'=>null])
                    </div>
                    <div class="card-footer text-right p-2">
                        <button class="btn btn-primary">{{__('Create')}}</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
</x-app-layout>
