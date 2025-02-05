@php $rand = rand(1, 9) @endphp

    
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row w-full">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            <span class="required">Stages</span>
        </label>
        <!--end::Label-->
        <div class="select-placeholder w-full" 
            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Select Stage" >
            <select id="stage-filter{{$rand}}" name="pipeline_stage_id" placeholder="A" data-live-search="true" 
                class="stage-filter with-ajax-field border border-gray-300 form-control form-control-solid ">
                @foreach ($stages as $stage)
                <option value="{{$stage->id ?? ''}}">{{$stage->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!--end::Input group-->
<script>
    jQuery('.stage-filter').selectpicker({
        liveSearch:true,
        // mobile:true,
        tickIcon:'glyphicon-ok',
        showTick: true,
        selectOnTab:true,
    });
</script>