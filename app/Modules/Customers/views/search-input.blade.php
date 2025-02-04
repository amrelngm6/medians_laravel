@php $rand = rand(1, 9) @endphp
<div class="select-placeholder w-full" 
    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Filter by Client Name" >

    <!-- <label for="assigned" class="control-label">Assigned To</label> -->
    <select id="name-filter{{$rand}}" name="{{$selectedInputName ?? 'client_id'}}" placeholder="A" data-live-search="true" 
        class="client-name-filter filter-on-change client-with-ajax border border-gray-300 form-control form-control-solid ">
        @if (isset($selectedClient)) <option value="{{$selectedClient->client_id}}" data-content="<img class='w-10 p-2 rounded-circle' src='/{{$selectedClient->picture}}' /> {{$selectedClient->name}}"> {{$selectedClient->name}}</option> @endif
    </select>
</div>
@section('client-search-scripts')
<script>
    setTimeout(() => {
        jQuery('.client-name-filter').selectpicker({
            liveSearch:true,
            tickIcon:'bx bx-user',
            showTick: true,
            selectOnTab:true,
        })
        .filter(".client-with-ajax")
        .ajaxSelectPicker({
        ajax: {
          url: '{{route("Client.search-input")}}?_token={{csrf_token()}}', // Replace with your API endpoint
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
                    'value': curr.client_id,
                    'text': curr.first_name + ' ' + curr.last_name,
                    'data': {
                        'icon': 'bx bx-user',
                        'content': "<img class='w-10 p-2 rounded-circle' src='/"+curr.picture+"' />" + curr.first_name + ' ' + curr.last_name
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
    }, 1000);

</script>
@endsection