
<div class="select-placeholder w-full" 
    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Filter by Staff Name" >

    <!-- <label for="assigned" class="control-label">Assigned To</label> -->
    <select id="name-filter" name="staff_id" placeholder="A" data-live-search="true" data-ajax--url="{{route('Staff.search-input')}}" data-ajax--data-type="json" data-ajax--data-field="name" data-ajax--data-token="{{csrf_token()}}" data-ajax--data-search="name" data-ajax--data-value="id" data-ajax--data-text="name" data-ajax--data-minimum-input-length="2" data-ajax--data-delay="250" data-ajax--data-method="GET" data-ajax--data-cache="true" data-ajax--data-allow-clear="true" data-ajax--data-placeholder="Search by Staff Name" data-ajax--data-width="100%" data-ajax--data-theme="bootstrap" data-ajax--data-escape-markup="true" data-ajax--data-template-result='<span class="select2-results__option" role="option" aria-selected="false"><%= text %></span>' data-ajax--data-template-selection='<span class="select2-selection__rendered" id="select2-staff_id-container" title="<%= text %>"><%= text %></span>'
        class="filter-on-change with-ajax border border-gray-300 form-control form-control-solid ">
        <option value=""></option>
    </select>
</div>
@section('search-scripts')
<script>
        
    $(document).ready(function () {
        
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
    });

</script>
@endsection