@foreach ($files as $file)

                            <div href="javascript:;"
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-info shrink-0">
                                    @include('uploads::components.file-icon')
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>{{$file->file_name ?? ''}}</h6>
                                    <p class="text-slate-500 dark:text-zink-200">{{$file->fileSizeText()}}</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at {{date('M d, Y - H:i a', strtotime($file->created_at))}}
                                </div>

                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/{{$file->user->picture ?? ''}}"> <span class="pt-1"><b>{{$file->user->name ?? ''}}</b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="{{route('Uploads.download', $file->id)}}?_token={{csrf_token()}}" target="_blank" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                        <i class="bx bx-download fs-4"></i>
                                    </a>
                                    <a href="javascript:;"
                                        data-path="{{route('Uploads.delete', $file->id)}}"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                        <i class="bx bx-trash"></i>
                                    </a>
                                </div>
                            </div>
                            @endforeach