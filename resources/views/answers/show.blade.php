<div class="post-bar">
<div class="post_topbar">
<div class="job_descp">
<div class="container">
  <div class="p-3" style="text-align:center">
 

      <div class="card mt-5 " >
              <div class="card-body">
              <h5 class="card-title">{{$answer->question->question}}</h5>
                <p class="card-text">user name:{{ $answer->question->user ? $answer->question->user->name : 'not exist'}}</p>
                <p class="card-text"><td>{{$answer->user->name }} answer by: {{$answer->answer}}</td></p>
              </div>
            </div>
      </div> 
      
</div>
</div>
</div>
</div>