@extends('admin.include.layout')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Make a Call</div>

                    <div class="card-body">
                        <button class="btn btn-primary" onclick="makeCall()">Call Me</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
)
    <script>
        function makeCall() {
            $.ajax({
                url: "{{ route('makeCall') }}",
                method: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                },
                success: function (response) {
                    console.log(response);
                },
                error: function (xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
        }
    </script>

      
@endsection