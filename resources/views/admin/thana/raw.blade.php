<option value="">Select</option>
@foreach ($thanas as $thana)
    <option value="{{ $thana->id }}">{{ $thana->name }}</option>
@endforeach
