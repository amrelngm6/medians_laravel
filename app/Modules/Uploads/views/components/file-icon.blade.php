                                    @if ( in_array($file->filetype, ['jpg', 'png', 'gif']) )
                                    <img src="{{route('Uploads.download', $file->id)}}?_token={{csrf_token()}}" /> 
                                    @elseif (in_array($file->filetype, ['pdf']) )
                                    <i class="bx bxs-file-pdf fs-2hx text-success"></i>
                                    @elseif (in_array($file->filetype, ['zip', 'rar', '7z']) )
                                    <i class="bx bxs-file-archive fs-2hx text-primary"></i>
                                    @elseif (in_array($file->filetype, ['doc', 'docx']) )
                                    <i class="bx bxs-file-doc fs-2hx"></i>
                                    @else
                                    <i class="bx bxs-file fs-2hx text-danger"></i>
                                    @endif