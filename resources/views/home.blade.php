@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
    <div class="container-fluid">
        <!-- Application Dashboard -->
        <div class="row justify-content-center">
            <div class="col-md-12">
                        <img src="../../../assets/icons/We19202.png" style="width: 100%;" />
            </div>
        </div>
    </div>
</home>
@endsection
