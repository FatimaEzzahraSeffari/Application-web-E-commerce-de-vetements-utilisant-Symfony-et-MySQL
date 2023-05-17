const createNav1 = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `

  
      

       </div>
       <div class="fixed-navbar-default">
       <div class="logoSpace">
         <h1 class="admin">Admin</h1>    
         
         <a class="btn-home" href="/main"><span class="glyphicon glyphicon-home"></span> Home</a>
          <a class="btn-home-default" href="/produit"><span class="glyphicon glyphicon-plus" ></span> Add new article </a>
          <a class="btn-home" href="/showuser"><span class="glyphicon glyphicon-user"></span> Show users</a>
          <a class="btn-home-default" href="/showmessage"><span class="glyphicon glyphicon-comment"></span> Reclamations</a>
          <a class="btn-home-default" href="/showarticle"><span class="glyphicon glyphicon-shopping-cart"></span> articles</a>
          <a class="btn-home-default" href="/bestselling"><span class="glyphicon glyphicon-plus"></span> add bestselling articles</a>
          <a class="btn-home-default" href="/showbestselling"><span class="glyphicon glyphicon-shopping-cart"></span> best articles</a>
     </div>
     
      
     
     
     
        
    `;
}

createNav1();


