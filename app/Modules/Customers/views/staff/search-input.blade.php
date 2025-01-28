
<div class="select-placeholder w-full" 
    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Filter by Staff Name" >

    <!-- <label for="assigned" class="control-label">Assigned To</label> -->
    <select id="name-filter" name="staff_id" placeholder="A" data-live-search="true" 
        class="filter-on-change with-ajax border border-gray-300 form-control form-control-solid ">
        <option value=""></option>
    </select>
</div>
@section('search-scripts')
<script>
        alert(1)
        
        jQuery('#name-filter').selectpicker({
            liveSearch:true,
            // mobile:true,
            tickIcon:'glyphicon-ok',
            showTick: true,
            selectOnTab:true,
        })
        .filter(".with-ajax")
        .ajaxSelectPicker({
        ajax: {
          url: '{{route("Staff.search-input")}}?_token={{csrf_token()}}', // Replace with your API endpoint
        //   url: 'https://jsonplaceholder.typicode.com/users', // Replace with your API endpoint
          data: function () {
            @php $q = '{{{q}}}' @endphp
            return {
              name: '{{$q}}' // The search query
            };
          },
        },
        preprocessData: function (response) {
            var contacts = [];
            var len = response.length;
            for(var i = 0; i < len; i++){
                var curr = response[i];
                contacts.push(
                {
                    'value': curr.staff_id,
                    'text': curr.first_name + ' ' + curr.last_name,
                    'data': {
                        'icon': 'icon-person',
                        'subtext': curr.email
                    },
                    'disabled': false
                }
                );
            }
            return contacts;

        },
        preserveSelected: false, // Preserve selected items
        liveSearch: true // Enable live search
      });

</script>
@endsection