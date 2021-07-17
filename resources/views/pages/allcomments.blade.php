<div class="container">
    <div class="row">

            <style >
                img{
                    width:640px;
                    height:480px;
                    object-fit: contain;
                }
            </style>
        <div class="col-6">
        @foreach($comment as $comments)
            <div>
                <h6>{{$comments->name}}</h6>
                <p> {{$comments->updated_at}}</p>
                <div class="row">
                    <div class="col-8">
                       {{$comments->message}}
                    </div>
                    <div class="col-4">
                        <img src="{{$comments->file_path}}" alt="Письма мастера дзен" >
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
            
        </div>
    </div>
</div>
