<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ver Vídeo</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Gafanhoto.php';
            //require_once 'Video.php'; JÁ ESTÁ EM VISUALIZAÇÃO
            require_once 'Visualizacao.php';
            //require_once 'Pessoa.php'; JÁ ESTÁ EM GAFANHOTO
            //require_once 'Pessoa.php';
                        
            $g[0] = new Gafanhoto('Renato Azevedo', 50, 'M', 'Renato');
            //echo"Novo Gafanhoto => g[0] : ";
            //print_r($g[0]);
            $g[1] = new Gafanhoto('Márcia Regina', 45, 'F', 'Márcia');
            //echo"Novo Gafanhoto => g[1] : ";
            //print_r($g[1]);
             
            $v[0] = new Video('A Origem');
            $v[1] = new Video('Curso de HTML');
            $v[2] = new Video('Curso de PHP');
            //print_r($v);
                       
            $vis[0] = new Visualizacao($g[0], $v[0]);
            $vis[0]->avaliar();
            $v[0]->like();
            echo '<p>Dei Like</p>';
            print_r($vis[0]);
            $g[0]->ganharExp(5);
            
            $vis[1] = new Visualizacao($g[1], $v[0]);
            $vis[1]->avaliarNota(7);
            print_r($vis[1]);
            $vis[2] = new Visualizacao($g[0], $v[1]);
            $vis[2]->avaliarPerc(80);
            print_r($vis[2] );
            
            $vis[3] = new Visualizacao($g[1], $v[2]);
            $vis[3]->avaliar();
            print_r($vis[3]);
            $g[1]->viuMaisUm();
            print_r($vis[3]);
        ?>
        </pre>
    </body>
</html>
