# Image Organizer

Organize suas imagens facilmente por meses e anos.

## Pré-requisitos

- PHP 7+ (testado apenas no 7.2)
- Composer

## Instalação

- Clone este projeto com `git clone https://github.com/CViniciusSDias/image-organizer.git`
- Entre na pasta raiz do projeto e digite `composer install`

## Utilização 

Após instalado, execute o comando da seguinte forma:
`php image-organizer.php /path/to/image/files`

Desta forma, todas as imagens em /path/to/image/files serão movidas para pastas referentes a seus meses e anos da data
da última modificação.