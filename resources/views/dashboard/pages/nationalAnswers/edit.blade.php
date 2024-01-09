@extends('dashboard.layout.form')


@section('form_input')
    <a href="{{ route('nationalAnswer.index') }}" class="btn btn-primary btn-xs">National Answer </a>

    <form class="form-horizontal" role="form" method="POST" enctype="multipart/form-data"
    action="{{ route('nationalAnswer.update',$answer->uuid) }}">
    @csrf
    @method('put')

    <div class="widget-main">
       
        <div class="tab-content padding-4">
            
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="answer" >

                    Answer
                 </label>
                 <div class="col-sm-4">
                    <textarea class="col-xs-10 col-sm-12" type="text" 
                         name="answer" id="answer" >{{ $answer->answer }}</textarea>
                     @error('answer')
                         <div>{{ $message }}</div>
                     @enderror
                 </div>
            </div><br><br>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="status">Status</label>
                <div class="col-sm-4">
                    <select class="col-xs-10 col-sm-5" name="status" id="status">
                        <option value="">{{ $answer->status }}</option>
                     
                            <option value="o">False</option>
                            <option value="1">True</option>
                      
                    </select>
                    @error('question_id')
                        <div>{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="question_id">question Name</label>
                <div class="col-sm-4">
                    <select class="col-xs-10 col-sm-5" name="question_id" id="question_id">
                        <option value=""> {{ $answer->NationalQuestion->question }}</option>
                        @foreach ($question as $item)
                        <option value="{{ $item->id }}">{{ $item->question }}</option>
                            
                        @endforeach
                    </select>
                    @error('question_id')
                        <div>{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div><br><br>


        
        <div class="form-group">
            <div class="col-sm-6 control-label no-padding-right">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i>save</button>
            </div>
        </div>

    </div>
</form>
@endsection
