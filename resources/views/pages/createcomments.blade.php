
        <div class="container">
            <div class="row">
                <div class="col-6">

                <form action="" method="post" class="form" name="myForm" enctype="multipart/form-data" onsubmit=" return validate()">
                  @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            
                            <input type="text"  name="name" class="form-control" id="name" placeholder="name">
                          </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                          </div>
                          <div class="mb-3">
                            <label for="Comment" class="form-label">Comment</label>
                            <textarea  name="message"class="form-control" id="Comment1" rows="3"></textarea>
                            <br> </br>
                         <div class="mb-3">
                                <label for="formFile" class="form-label"></label>
                                <input name="file_path" class="form-control" type="file" id="file_path">
                              </div>   
                          </div>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            
                            <button type="submit" class="btn btn-primary">додати </button>
                            
                          </div>
                          <hr> 

                    </form>

                </div>  
            </div>
        </div>

        <script src="{{asset('style/js/index.js')}}"></script>
   