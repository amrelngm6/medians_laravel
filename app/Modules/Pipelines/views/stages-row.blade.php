
            <nav aria-label="Progress" class="mt-5 flex">
                <a 
                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                    data-title="Pipeline Setting" data-content="Change this Pipeline"
                    href="{{route('Pipeline.change-pipeline-modal', $model->id)}}" class="open-modal" >
                    <i class="bx bx-cog fs-3 p-3"></i>
                </a>
                @if ($pipeline)
                <ol
                class="w-full divide-y divide-neutral-300 overflow-hidden rounded-md border border-neutral-300 dark:divide-neutral-500/30 dark:border-neutral-500/30 lg:flex lg:flex-wrap lg:divide-y-0">
                @php
                    $activeSort = array_values($pipeline->stages->where('id', $selectedStage->pipeline_stage_id)->select('sort')->toArray())[0]['sort'] ?? 0; 
                @endphp
                @foreach ($pipeline->stages as $stage)
                <li 
                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                    data-title="{{$stage->name}}" data-content="{{$stage->description}}"
                    class=" hover:bg-slate-200
                    @if ($stage->sort == $activeSort) text-primary @endif 
                    @if ($stage->sort < $activeSort) text-success @endif 
                    @if ($stage->sort > $activeSort) text-gray-400 @endif 
                    relative overflow-hidden truncate bg-neutral-50 dark:bg-neutral-800 lg:flex lg:flex-1">
                    <form class="ajax-form reload-ajax" action="{{route('PipelineSelectedStage.change')}}" id="stage-{{$stage->id}}">
                            @csrf
                        <input type="hidden" name="pipeline_stage_id" value="{{$stage->id}}" />
                        <input type="hidden" name="pipeline_id" value="{{$stage->pipeline_id}}" />
                        <input type="hidden" name="model_id" value="{{$model->id}}" />
                        <input type="hidden" name="model_type" value="{{get_class($model)}}" />
                        <button type="submit" value="{{$stage->id}}" name="pipeline_stage_id"
                            class="group flex w-full items-center "
                            ><span
                                class="flex items-center px-4 py-2 text-base font-medium sm:text-sm"><span
                                    class="flex size-7 shrink-0 items-center justify-center rounded-full bg-success-500 group-hover:bg-success-700 dark:bg-success-400 dark:group-hover:bg-success-500">
                                    @if ($stage->sort < $activeSort) <i class='bx bxs-check-circle  '></i> @endif 
                                    @if ($stage->sort >= $activeSort) <i class='bx bx-check-circle   '></i> @endif 
                                </span><span
                                    class="ml-4 text-base font-medium text-neutral-900 dark:text-neutral-200 sm:text-sm 
                                    @if ($stage->sort < $activeSort) line-through @endif 
                                    ">{{$stage->name}}</span></span></a>
                        <div class="absolute right-0 top-0 hidden h-full w-5 bg-neutral-50 dark:bg-neutral-800 lg:block"
                            aria-hidden="true">
                        </div>
                        </form>
                    </li>
                    @endforeach
                </ol>
                @endif
                
                <a 
                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                    data-title="Add Stage" data-content="Add new stage to this Pipeline"
                    href="{{route('Pipeline.addStage', $selectedStage->pipeline_id ?? 0)}}" class="open-modal" >
                    <i class="bx bx-plus-circle fs-3 p-3"></i>
                </a>
            </form>
            </nav>