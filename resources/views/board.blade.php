
   <style>
      h1{
         text-align: center;
      }
      .container{
         height: 100%;
         width: 100%;
         background-color: whitesmoke;
      }
      .board{
         background:repeating-linear-gradient( 45deg, transparent, transparent 10px, #ccc 10px, #ccc 20px ), linear-gradient( to bottom, #eee, #999 );
         /* https://css-tricks.com/stripes-css/ */
         display: flex;
         flex-wrap: wrap;
         height: 90%;
         width: 100%;
         box-sizing: border-box;
         border-radius: 5px;
      }
      
      .list{
         background: seashell;
         width: 300px;
         padding: 10px;
         margin: 10px 0 0 10px;
         border-radius: 5px;
         border: 1px solid black;
      }

      .card{
         background: white;
         padding: 10px;
         margin: 10px 0;
         border-radius: 5px;
         border: 1px solid black;
      }
      .position{
         background-color: blueviolet;
         color: white;
      }
      .user{
         background-color: blueviolet;
         color: white;
      }
      
   </style>
<div class="container">   
   <h1> PoorTrello </h1> 
   Board: {{ $board->title  }} 

<div class="board">  
      @foreach ($lists as $list)
         <div class="list">       
            Lista:  {{ $list->title }} <span class="position">Position: {{ $list->position }} </span>     
            <span class="user">  </span>
            @foreach ($cards as $card)
                  @if ($card->trellolist_id == $list->id)  
                     <div class="card">          
                           {{-- dificil --}}
                       User  <span class="user"> {{ $card->user()->get()->first()['name']; }} </span> 
                              Title: {{ $card->title }}                    
                              Content: {{ $card->content }}                                    
                        <span class="position">Position: {{ $card->position }} </span>, 
                     </div> {{-- card --}}
                  @endif
            @endforeach
         </div> {{-- list --}}
      @endforeach
   </div> {{-- board --}}
</div> {{-- container --}}
