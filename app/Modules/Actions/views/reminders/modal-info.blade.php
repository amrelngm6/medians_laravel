<div class=" w-full py-2">
                                <div class="flex w-full gap-4">
                                    <small class="w-full">Timesheet</small>
                                    <a style="line-height:5px; " rel="popover" data-toggle="popover"
                                        data-placement="top" data-trigger="hover"
                                        data-content="Reminders of spent time for this task"
                                        class="text-primary fw-bold fs-7 pb-6 open-modal"
                                        href="{{route('Reminder.showList', ['model_id'=>$model->id() ?? '0', 'model_type' => get_class($model)])}}"
                                        data-modal="#new-reminder-modal">
                                        <i class="bx bx-log "></i> History
                                    </a>
                                </div>
                                
                                <a rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                    data-content="End current Timesheet for this task" 
                                    data-confirm="End Timesheet ?"
                                    data-confirm-text="Are you sure you want to end this active Timesheet for this Task ?"
                                    href="{{route('Reminder.createForModel', ['model_id'=>$model->id() ?? '0', 'model_type' => get_class($model)])}}?_token={{csrf_token()}}"
                                    id="task-reminder"
                                    class="open-modal btn btn-primary btn-sm">
                                    <i class='bx bx-time-five'></i> Set Reminder <span
                                        class="h-10px inline-block rounded-full w-10px "></span>
                                </a>
                            </div>