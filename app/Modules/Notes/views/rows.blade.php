
                                        <?php $staff = Auth::user(); ?>
                                        @foreach ($notes as $note)
                                        @if ($note->canView($staff->staff_id, get_class($staff)))
                                        <tr>
                                            <td>{{$note->id}}</td>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{$note->url}}">{{$note->description}}</a>
                                                    <!-- <small class="text-muted block">{{strtotime($note->end) > strtotime(date('Y-m-d') ? 'Active' : 'Ended')}}</small> -->
                                                </div>
                                            </td>
                                            <td >
                                                <div 
                                                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                    data-title="" data-content="{{$note->user->name ?? ''}}"
                                                    class="symbol-group symbol-hover flex-nowrap flex gap-2">
                                                    <a href="{{$note->user_url}}" class="symbol symbol-35px symbol-circle">
                                                        <img alt="Pic" src="/data/profile/avatar-1.png">
                                                    </a>
                                                </div>
                                            </td>
                                            <td>{{date('M d, Y - H:i a', strtotime($note->created_at))}}</td>
                                            <td>
                                                
                                                <a data-path="{{route('Note.delete', $note->id)}}" class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                    href="#!">
                                                    <span class="align-middle">Delete</span></a>
                                            </td>
                                        </tr>
                                        @endif
                                        @endforeach