<div class="post-bar">
  <div class="post_topbar">
    <div class="job_descp">
      <div class="main-section" style="z-index:1">
        <div class="container">
          <div class="p-3" style="text-align:center" >
            <form method="POST" action="{{route('questions.store')}}">
              @csrf
              <h1 style="color: #E44E3A; font-size:30px;"><strong>Create New Question</strong></h1>
              <div class="form-group mt-5 ">
            @if ($prof)
                    <input type="hidden" class="form-control" name="prof" value="{{$prof}}">
                    <input type="hidden" class="form-control" name="cat" value="{{$cat}}">
            @else
              </div>
              <div class="form-group">  
                <label for="exampleFormControlSelect1" class="mb-3">Categories</label>
                <select name="cat" class="form-control" value="">
                  @foreach($cats as $cat)  
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                  @endforeach
                </select> 
              </div>
            @endif
            <div class="form-group">
              <label for="exampleFormControlTextarea1" class="mb-3">Ask a Question</label>
              <textarea class="form-control" name="question" rows="3" required></textarea>
            </div>
          <button type="submit" class="btn text-light" style="background-color: #E44E3A;">Create</button>
            @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
            </form>  
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>







