<div class=" w-full py-2">
                                <div class="flex w-full gap-4">
                                    <small class="w-full">Reminders</small>
                                    <a style="line-height:5px; " rel="popover" data-toggle="popover"
                                        data-placement="top" data-trigger="hover"
                                        data-content="Reminders of spent time for this {{class_basename($model)}}"
                                        class="text-primary fw-bold fs-7 pb-6 open-modal"
                                        href="{{route('Reminder.showList', ['model_id'=>$model->id() ?? '0', 'model_type' => get_class($model)])}}"
                                        data-modal="#new-reminder-modal">
                                        <i class="bx bx-log "></i> History
                                    </a>
                                </div>
                                
                                <a rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                    data-content="Set new Reminder for this task" 
                                    href="{{route('Reminder.createForModel', ['model_id'=>$model->id() ?? '0', 'model_type' => get_class($model)])}}?_token={{csrf_token()}}"
                                    id="task-reminder"
                                    class="open-modal btn btn-primary btn-sm">
                                    <i class='bx bx-time-five'></i> Remind me <span
                                        class="h-10px inline-block rounded-full w-10px "></span>
                                </a>
                            </div>