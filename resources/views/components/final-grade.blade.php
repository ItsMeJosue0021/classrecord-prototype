<div id="final" class="hidden w-full ">
    <div class="w-full flex items-center bg-gray-100 border border-gray-300 rounded py-1 px-2 mb-2">
        <div class="w-full flex items-center space-x-4 rounded">
            <div class="w-fit flex items-center space-x-4">
                <h1 class="poppins text-sm py-2">FINAL GRADE</h1>
            </div>
        </div>
    </div>
    <div class="w-full border border-gray-400">
       
        {{-- row 4 --}}
        <div>
            {{-- @foreach ($students as $student) --}}
                
            <div class="flex justify-between border-t border-b border-gray-400">
                
                        {{-- name --}}
                <div class="w-1/4 flex justify-start items-center py-2 border-r border-gray-400">
                    <div class="flex space-x-2 px-2">
                        {{-- <p class="poppins text-sm">{{$student->last_name}},</p>
                        <p class="poppins text-sm">{{$student->first_name}}</p>
                        <p class="poppins text-sm">{{ substr($student->middle_name, 0, 1) }}.</p> --}}
                    </div>
                </div>

                <div class="flex bg-gray-200">
                    <div class="w-60px flex justify-center items-center border-r border-l border-gray-400">
                        <p class="poppins text-sm">0</p>
                    </div>
                </div>

            </div>
            {{-- @endforeach --}}
        </div>
    </div>
</div>