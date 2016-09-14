@for ($i = 1; $i <= 8; $i++)
    <?php $column = 'topic' . $i; ?>
    	@if($school->$column!='')
    	<option value="{{ $i }}">{{ $school->$column }}</option>
    	@endif
@endfor
