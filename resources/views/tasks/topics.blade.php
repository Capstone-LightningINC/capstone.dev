@for ($i = 1; $i <= 8; $i++)
    <?php $column = 'topic' . $i; ?>
    <option value="{{ $i }}">{{ $school->$column }}</option>
@endfor
