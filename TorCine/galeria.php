<?php include "cabecalho.php" ?>

<?php

$filme1 = [ 
  "titulo"=> "Vingadores: Ultimato",
  "nota"=> 8.6, 
  "sinopse" =>"Após os eventos devastadores de 'Vingadores:Guerra Infinita',
  o universo está em ruínas devido aos esforços do Titã Louco, Thanos. 
  Com a ajuda de aliados remanescentes, os Vingadores devem se reunir 
  mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem
   no universo de uma vez por todas, não importando as consequências",
    
   "poster"=>"/imagem/herois.jpg"

  
  ];
  $filme2 = [ 
    "titulo"=> "Dragon Ball GT",
    "nota"=> 8.6, 
    "sinopse" =>"Essa fase do grande sucesso Dragon Ball GT 
    conta a história de Goku Jr. Um garoto que se parecia com o
     goku que vivia com a sua avó Pan e um dia a avó dele ficou 
     doente e teve que ficar no hospital de Satan City. Goku achou 
     que ela fosse morrer e foi em busca da esfera do dragão de 4 
     estrelas na montanha paozu para poder fazer um desejo para que a sua avó
     não morresse então ele parte em uma jornada até a montanha 
    paozu e descobre que tem muito poder assim como Goku, o guerreiro corajoso.",
      
     "poster"=>"https://www.themoviedb.org/t/p/w300/2u09FiAuyMdS6EzOi7FH0ULciys.jpg",
     
  
    ];
    $filme3 = [ 
      "titulo"=> "Garota Infernal",
      "nota"=> 9,9, 
      "sinopse" =>" Ao ser possuída por um demônio, a estudante
      Jennifer se torna muito brava com os rapazes que nunca a deram uma chance. 
      Enquanto a maldosa Jennifer satisfaz seu apetite com carne humana de meninos da escola, 
     sua amiga nerd Needy descobre o que está acontecendo e promete colocar um fim na carnificina.",
        
       "poster"=>"https://www.themoviedb.org/t/p/w300/lIHXfHgVPDP0r5tKuysqpNkQQmV.jpg",
  
      
    
      ];
      $filme4 = [
        "titulo"=> "Olhos Famintos",
        "nota"=> 5.4,
        "sinopse" =>"Ao voltarem para casa por uma estrada sem movimento, os irmãos Trish e Darry veem um vulto atirandoo que parece ser um corpo embrulhado. Parando para investigar, eles descobrem centenas de corpos mutilados, pendurados embaixo de uma antiga igreja",
        "poster"=>"https://www.themoviedb.org/t/p/w300/jPiaAL3hOAexYnw5JMCwJT0xjgm.jpg",
      
          ];
        


?>
 
 $filmes = [filme1", "filme2", "filme3", "filme4];





<!--head não tá aqui, tá no cabecalho, fiz isso
para facilitar, quando for estilizar, caso contrário aqui,
ficaria muito confuso, muito código, fiz isso para melhor formatar o próprio-->


    <body>
    
    <nav class="nav-extended purple lighten-3" >
    <div class="nav-wrapper">
     <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
        
      </ul>
      </div>
   
      <div class="nav-header center">
           <h1>TorCine</h1>
        </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent purple darken-1">
        <li class="tab"><a  class="active" href="#test1">Todos</a></li>
        <li class="tab"><a class="active" href="#test2">Assistidos(a)</a></li>
        <li class="tab "><a href="#test3">Favoritos</a></li>
        
      </ul>
    </div>
  </nav>
  
  <!--aqui começa-->     
  <div class="row"> 
  $filmes = [ $filme1 = array (nome => nome1, nota =>nota1), $filme2 = array( nome => nome2, nota => nota2)  [ $filme3 = array (nome => nome3, nota =>nota3)  [ $filme4 = array (nome => nome4, nota =>nota4)];

      <div class="col s3"> <!--daqui até-->
      <div class="card">
      <div class="card-image">
        <img src="<?=$filme1 ["poster"] ?>">  
        <a class="btn-floating halfway-fab waves-effect waves-light red">
        <i class="material-icons">favorite_border</i>
        </a>
        </div>
    <div class="card-content">
     <p class="valign-wrapper"> <i class="material-icons amber-text">star</i></a> <?=$filme1 ["nota"] ?> 
    <!--O php ali acima seria a nota que substitui pela variável-->
    
    </p>
     <span class="card-title"><?=$filme1 ["titulo"] ?> </span> <!--como é uma única linha de código o php entende-->
              <!--troquei o texto sinopse pela variável "sinopse"--> 
              <p> <?= $filme1 ["sinopse"] ?> </p>
        </div>
       
    </div>  <!--são os meus cards--> 
    
                </div> 
                <?php     ?>    

      
    </body>
    
</html>