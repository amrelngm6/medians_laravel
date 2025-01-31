
            <nav aria-label="Progress" class="mt-5 flex">
                <a href="{{route('Pipeline.change-pipeline-modal', $model->id)}}" class="open-modal" >
                    <i class="bx bx-cog"></i>
                </a>
                @if ($pipeline)
                <ol
                class="w-full divide-y divide-neutral-300 overflow-hidden rounded-md border border-neutral-300 dark:divide-neutral-500/30 dark:border-neutral-500/30 lg:flex lg:flex-wrap lg:divide-y-0">
                @foreach ($pipeline->stages as $stage)
                <li class=" @if ($selectedStage->pipeline_stage_id == $stage->id) bg-primary @endif 
                 @if ($selectedStage->pipeline_stage_id < $stage->id) bg-success @endif 
                 @if ($selectedStage->pipeline_stage_id > $stage->id) bg-light @endif 
                relative overflow-hidden truncate bg-neutral-50 dark:bg-neutral-800 lg:flex lg:flex-1">
                    <form class="ajax-form" action="{{route('PipelineSelectedStage.change')}}" id="stage-{{$stage->id}}">
                            @csrf
                        <input type="hidden" name="pipeline_stage_id" value="{{$stage->id}}" />
                        <input type="hidden" name="pipeline_id" value="{{$stage->pipeline_id}}" />
                        <input type="hidden" name="model_id" value="{{$model->id}}" />
                        <input type="hidden" name="model_type" value="{{get_class($model)}}" />
                        <button type="submit" value="{{$stage->id}}" name="pipeline_stage_id"
                            class="group flex w-full items-center "
                            ><span
                                class="flex items-center px-4 py-2 text-base font-medium sm:text-sm"><span
                                    class="flex size-7 shrink-0 items-center justify-center rounded-full bg-success-500 group-hover:bg-success-700 dark:bg-success-400 dark:group-hover:bg-success-500"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"
                                        class="size-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5">
                                        </path>
                                    </svg></span><span
                                    class="ml-4 text-base font-medium text-neutral-900 dark:text-neutral-200 sm:text-sm">{{$stage->name}}</span></span></a>
                        <div class="absolute right-0 top-0 hidden h-full w-5 bg-neutral-50 dark:bg-neutral-800 lg:block"
                            aria-hidden="true"><svg class="h-full w-full text-neutral-300 dark:text-neutral-500/30"
                                viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor"
                                    stroke-linejoin="round"></path>
                            </svg></div>
                        </form>
                    </li>
                    @endforeach
                </ol>
                @endif
            </form>
            </nav>