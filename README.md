# Aplicação básica com Inteligência Artificial (IA)
O projeto tem como objetivo gerar gráfico de dashboard usando inteligência artificial (IA) com OpenAI.

<table style="width:100%">
    <thead>
      <tr>
        <th></th>
        <th>Workspace</th>
        <th>Documentação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="https://tailwindcss.com/_next/static/media/tailwindcss-mark.79614a5f61617ba49a0891494521226b.svg" width="50" alt="alpinejs"></td>
        <td>Tailwind CSS</td>
        <td><a target="_blank" href="https://tailwindcss.com/docs/installation">https://tailwindcss.com/docs/installation</a></td>
      </tr> 
      <tr>
        <td><img src="https://www.markusantonwolf.com/topics/alpine-js/alpinejs-logo.svg" width="50" alt="alpinejs"></td>
        <td>Alpine Js</td>
        <td><a target="_blank" href="https://alpinejs.dev/start-here">https://alpinejs.dev/start-here</a></td>
      </tr>
      <tr>
        <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" width="50" alt="laravel"></td>
        <td>Laravel 9</td>
        <td><a target="_blank" href="https://laravel.com/">https://laravel.com/</a></td>
      </tr> 
      <tr>
        <td><img src="https://forum.laravel-livewire.com/uploads/default/original/1X/ae56db345f77c0c63e3ab7686e222fee1a56bb7f.png" width="50" alt="livewire"></td>
        <td>Livewire</td>
        <td><a target="_blank" href="https://laravel-livewire.com/docs/2.x/quickstart">https://laravel-livewire.com/docs/2.x/quickstart</a></td>
      </tr> 
      <tr>
        <td><img src="https://seeklogo.com/images/I/insomnia-logo-A35E09EB19-seeklogo.com.png" width="50" alt="insomnia"></td>
        <td>Insomnia</td>
        <td><a target="_blank" href="https://insomnia.rest/">https://insomnia.rest/</a></td>
      </tr> 
      <tr>
        <td><img src="https://www.docker.com/wp-content/uploads/2022/03/Moby-logo.png" width="50" alt="docker"></td>
        <td>Docker</td>
        <td><a target="_blank" href="https://www.docker.com/">https://www.docker.com/</a></td>
      </tr>   
      <tr>
        <td><img src="https://www.postgresql.org/media/img/about/press/elephant.png" width="50" alt="docker"></td>
        <td>PostgreSql</td>
        <td><a target="_blank" href="https://www.postgresql.org/docs/">https://www.postgresql.org/docs/</a></td>
      </tr> 
      <tr>
        <td><img src="https://static-00.iconduck.com/assets.00/openai-icon-505x512-pr6amibw.png" width="50" alt="docker"></td>
        <td>OpenAI</td>
        <td><a target="_blank" href="https://platform.openai.com/docs/quickstart">https://platform.openai.com/docs/quickstart</a></td>
      </tr> 
      <tr>
        <td><img src="https://media.licdn.com/dms/image/D5612AQFH_8uDdNvlZw/article-cover_image-shrink_720_1280/0/1671393364329?e=2147483647&v=beta&t=jwBnHtqhSc39wT54DGdcEWhM9SEqE7iwTOpMnXryKYw" width="50" alt="docker"></td>
        <td>Vega Lite</td>
        <td><a target="_blank" href="https://vega.github.io/vega/docs/">https://vega.github.io/vega/docs/</a></td>
      </tr> 
    </tbody>
</table>

## Application features
* [x] frontend construct
* [x] backend construct
* [ ] training OpenAI

Exemplo do recurso principal em funcionamento
![Generating Chart](/storage/generating_chart.gif "Generating Chart")

## Para refinar o aprendizado da IA
- Insira mais comando e resposta no arquivo  `olw-dataset.jsonl` no diretório storage do projeto.

## Comandos de execução

- Para iniciar o projeto pela primeira vez, execute:
```
    docker-compose up -d --build
```
- Após o 1º build, poderá está executando sem a flag --build
```
    docker-compose up -d
```
- Para derrubar os container, execute:
```
    docker-compose down
```



- Para criar OpenAi fine tuning, execute:
    ```php
        php artisan openai:create-finetuning
    ```
    ou usando o sail:
    ```php
        ./vendor/bin/sail artisan openai:create-finetuning
    ```