<div class="wrapper container-fluid">
    {!! Form::open(['url' => route('pagesEdit',array('article'=>$data['id'])),'class'=>'form-horizontal','method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::hidden('id', $data['id']) !!}
             {!! Form::label('name', 'Название:',['class'=>'col-xs-2 control-label']) !!}
             <div class="col-xs-8">
                 {!! Form::text('name', $data['name'], ['class' => 'form-control','placeholder'=>'Введите название страницы']) !!}
             </div>
        </div>
        
        <div class="form-group">
             {!! Form::label('aliases', 'Псевдоним:',['class'=>'col-xs-2 control-label']) !!}
             <div class="col-xs-8">
                 {!! Form::text('aliases', $data['aliases'], ['class' => 'form-control','placeholder'=>'Введите псевдоним страницы']) !!}
             </div>
        </div>
        
        <div class="form-group">
             {!! Form::label('text', 'Текст:',['class'=>'col-xs-2 control-label']) !!}
             <div class="col-xs-8">
                 {!! Form::textarea('text', $data['text'], ['id'=>'editor','class' => 'form-control','placeholder'=>'Введите текст страницы']) !!}
             </div>
        </div>
        
        <div class="form-group">
            {!! Form::label('old_img', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
            <div class="col-xs-offset-2 col-xs-10">
                {!! Html::image('inc/img/'.$data['img'],'',['class'=>'img-circle img-responsive','width'=>'150px']) !!}
                {!! Form::hidden('old_img', $data['img']) !!}
            </div>
        </div>
        
        <div class="form-group">
             {!! Form::label('img', 'Изображение:',['class'=>'col-xs-2 control-label']) !!}
             <div class="col-xs-8">
                 {!! Form::file('img', ['class' => 'filestyle','data-buttonText'=>'Выберите изображение','data-buttonName'=>"btn-primary",'data-placeholder'=>"Файла нет"]) !!}
             </div>
        </div>
        
    
        
          <div class="form-group">
            <div class="col-xs-offset-2 col-xs-10">
              {!! Form::button('Сохранить', ['class' => 'btn btn-primary','type'=>'submit']) !!}
            </div>
          </div>
        
    {!! Form::close() !!}
    
     <script>
        CKEDITOR.replace( 'editor' );
    </script>
    </div>