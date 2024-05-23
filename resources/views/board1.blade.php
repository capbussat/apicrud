
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
   Board 

<div class="board">  
      {{-- 1 --}}
         <div class="list">       
            Lista   : <span class="position">Position:  </span>    
            <span class="user">  </span>
            {{-- 2 --}}
               <div class="card">          
                  {{-- depèn de on treguis les dades et cal una condició --}} 
                   <span class="user">  </span>   
                        Title:                   
                        Content:                                     
                        <span class="position">Position:  </span>, 
                  {{-- condició --}}
               </div> {{-- card --}}
            {{-- 2--}}
         </div> {{-- list --}}
      {{-- 1--}}
   </div> {{-- board --}}
</div> {{-- container --}}
