<div style="margin:0px 50px 0px 50px;">   
    @if($articles)
     
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Имя</th>
                    <th>Псевдоним</th>
                    <th>Текст</th>
                    <th>Дата создания</th>
                    
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
            
            @foreach($articles as $k => $article)
            
                <tr>
                
                    <td>{{ $article->id }}</td>
                    <td>{!! Html::link(route('pagesEdit',['article'=>$article->id]),$article->name,['alt'=>$article->name]) !!}</td>
                    <td>{{ $article->aliases }}</td>
                    <td>{!! $article->text !!}</td>
                    <td>{{ $article->created_at }}</td>
                    
                    <td>
                        {!! Form::open(['url'=>route('pagesEdit',['article'=>$article->id]), 'class'=>'form-horizontal','method' => 'POST']) !!}
    
                            {{ method_field('DELETE') }}
                            {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}
                            
                        {!! Form::close() !!}
                    </td>
                </tr>
            
            @endforeach
            
            
            </tbody>
        </table>
    @endif 
    
    <h6>{!! Html::link(route('pagesAdd'),'Новая страница') !!}</h6>
       
    </div>
