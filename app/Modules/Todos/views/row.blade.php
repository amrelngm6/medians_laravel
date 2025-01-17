<li class="d-flex align-items-center {{ $todo->completed ? 'active-task' : '' }}" onClick="(function(){document.getElementById('i{{$todo->id}}').checked ? jQuery('#task{{$todo->id}}').addClass('active-task') : jQuery('#task{{$todo->id}}').removeClass('active-task')})()"   id="task{{ $todo->id }}">
                        <form action="{{ route('Todo.update', $todo->id) }}" method="POST" class="form w-full ajax-form " id="form-task{{ $todo->id }}">
                            @csrf
                            <input type="hidden" name="completed" value="0">

                            <label class="show-child p-3 d-flex align-items-center w-full form-check form-check-custom form-check-inline form-check-solid me-5">
                                <div class="user-img img-fluid"><img src="{{ $todo->user->picture ?? null }}" alt="story-img" class="rounded-circle w-50px h-50px"></div>
                                <div class="media-support-info px-4 w-full">
                                    <h6 class="d-inline-block">{{ $todo->description }}</h6>
                                    @if($todo->status)
                                    <span class="badge bg-{{ $todo->status->color }} mx-4">{{ $todo->status->name }}</span>
                                    @endif
                                    @if($todo->priority)
                                    <span class="badge bg-{{ $todo->priority->color }} mx-4">{{ $todo->priority->name }}</span>
                                    @endif
                                    <p class="mb-0"> @if ($todo->user_id != $user->id() ) by {{ $todo->user->name }} - @endif {{date('M d, Y', strtotime($todo->date))}} </p>
                                </div>
                                <div class="card-header-toolbar d-flex gap-4 align-items-center">
                                    <a href="javascript:;" data-path="{{route('Todo.delete', $todo->id)}}" class="delete-item show-on-hover hidden">
                                        <i class="bx bx-trash fs-1"></i>
                                    </a>
                                    <input data-element="modals" data-form="form-task{{$todo->id}}" id="i{{$todo->id}}" class="submit-on-change form-check-input " data-class="active-task" data-target="#task{{ $todo->id }}" name="completed" type="checkbox" value="1" {{ $todo->completed ? 'checked' : '' }}>
                                </div>
                            </label>
                        </form>
                    </li>