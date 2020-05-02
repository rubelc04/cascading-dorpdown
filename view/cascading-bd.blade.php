@extends('layouts/master')

@section('content')


<div class="container-fluid mt-4">
    <h3>Cascading Dropdown of Division, District and upazilas of BD</h3>

    <div class="row">
        <div class="offset-md-4 col-md-3">

            <form action="" method="post">
                <div class="form-group">
                    <label for="">Division</label>
                    <select name="division" id="division" class="form-control">
                        <option value="">Select...</option>
                        @foreach($divisions as $division)
                        <option value="{{ $division->id }}"> {{ $division->division_name }} </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">District</label>
                    <select name="district" id="district" class="form-control">
                        <option >Select...</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="">Upazila</label>
                    <select name="upazila" id="upazila" class="form-control">
                        <option>Select...</option>
                    </select>
                </div>

            </form>
        </div>
    </div>

</div>




@endsection


@section('script')

<script>
$(document).ready( function(){
    
    //To Get District under the selected Division
    $('#division').on('change', function(){
        $('#district').empty().append('<option> Select </option>');
        
        var division_id = $('#division').val();
        var url = "{{route('getDistrict')}}"
        $.ajax({
        url: url,
        method: 'GET',
        data: {
            'division_id': division_id,
        },
        success: function(data){   
            data.forEach(element => {
                $('#district').append('<option value=" ' +element.id+ ' ">' +element.district_name+ '</option>')
                })
        }
    }); //ajax

    }); //End district

    //To Get Upazila under the selected District
    $('#district').on('change', function(){
        $('#upazila').empty().append('<option> Select </option>');

        var district_id = $('#district').val();
        var url = "{{route('getUpazila')}}"
        $.ajax({
            url: url,
            method: 'GET',
            data:{
                'district_id': district_id,
            },
            success: function(data){
                data.forEach(element => {
                    $('#upazila').append('<option value=" ' +element.id+ ' ">' +element.upazila_name+ '</option>')
                    })  
            }
        }) //ajax
    });//End upazila
   
});
</script>

@endsection
