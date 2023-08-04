<div id="written" class="w-full ">
                            
    <div class="w-full flex items-center  border border-gray-100 shadow-md rounded py-2 px-2 mb-3">
        <div class="w-full flex items-center space-x-4 rounded">
            <div class="w-fit flex items-center space-x-4">
                <h1 class="poppins h-full rounded p-2 text-sm bg-[#004080] text-white">WRITTEN WORKS</h1>

                <div class="flex items-center space-x-2">
                    <div class="flex items-center rounded py-1 px-2 border border-gray-300">
                        <h2 class="poppins text-sm mr-3">PERCENTAGE</h2>
                        <input class="w-10 py-1 px-1 poppins text-sm rounded border-0 focus:outline-none" type="number" placeholder="20">
                        <button class="poppins text-xs text-white bg-[#004080] px-2 py-1 font-bold rounded">CHANGE</button>
                    </div>
                </div>
            </div>

            <div class="w-fit flex items-center space-x-4 rounded py-1 px-2 border border-gray-300">
                <h2 class="poppins text-sm ">ACTIVITIES</h2>
                <p class="poppins py-1 px-3 rounded border border-gray-300 text-sm">10</p>
                <a id="new-written-act" class="poppins text-xs font-bold text-white bg-[#007A5E] px-2 py-1 rounded cursor-pointer">NEW</a>
            </div>
        </div>
    </div>

    <div class="w-full border border-gray-400">
        {{-- row 2 --}}
        <div class="w-full flex border-t border-b border-gray-400 bg-gray-100">
            <div class="w-1/4 flex justify-center items-center py-2 border-r border-gray-400">
                <p class="poppins text-sm">ACTIVITY NO.</p>
            </div>
            
            <div class="w-3/4 flex justify-between border-gray-400">
                <div class="flex">
                        {{-- loop the table activity and show the max score each --}}
                    <div class="w-60px flex justify-center items-center border-r border-gray-400">
                        <p class="poppins text-sm">1</p>
                    </div>

                </div>

                <div class="flex">
                    <div class="w-60px flex justify-center items-center border-r border-l border-gray-400">
                        <p class="poppins text-xs font-medium">TOTAL</p>
                    </div>
                    <div class="w-60px flex justify-center items-center border-r border-gray-400">
                        <p class="poppins text-xs font-medium">PS</p>
                    </div>
                    <div class="w-60px flex justify-center items-center border-r border-gray-400">
                        <p class="poppins text-xs font-medium">WS</p>
                    </div>
                </div>  
            </div>
        
        </div>

        {{-- row 3 --}}
        <div class="w-full flex justify-start border-t border-b border-gray-300 bg-gray-200">
            <div class="w-1/4 flex justify-center items-center py-1 border-r  border-gray-400">
                <p class="poppins text-sm">HIGHEST POSSIBLE SCORE</p>
            </div>
            <div class="w-3/4 flex justify-between">
                <div class="flex">
                    {{-- loop the table activity and show the max score each --}}
                    <div class="w-60px flex justify-center items-center border-r border-gray-400">
                        <p class="poppins text-sm">20</p>
                    </div>
                    
                </div>

                <div class="flex">
                    <div class="w-60px flex justify-center items-center border-r border-l border-gray-400">
                        <p class="poppins text-sm">0</p>
                    </div>
                    <div class="w-60px flex justify-center items-center border-r border-gray-400">
                        <p class="poppins text-sm">0</p>
                    </div>
                    <div class="w-60px flex justify-center items-center border-r border-gray-400">
                        <p class="poppins text-sm">0</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- row 4 --}}
        <div>                       
            {{-- @foreach ($students as $student) --}}
                
            <div class="flex justify-start border-t border-b border-gray-400">
                
                        {{-- name --}}
                <div class="w-1/4 flex justify-start items-center py-1 border-r border-gray-400">
                    <div class="flex space-x-2 px-2">
                        {{-- <p class="poppins text-sm">{{$student->last_name}},</p>
                        <p class="poppins text-sm">{{$student->first_name}}</p>
                        <p class="poppins text-sm">{{ substr($student->middle_name, 0, 1) }}.</p> --}}
                    </div>
                </div>
                {{-- activities --}}
                <div class="w-3/4 flex justify-between">
                    <div class="flex overflow-hidden"> 
                        {{-- loop the table activities for each students --}}                                            
                        <div class="w-60px justify-start border-r border-gray-400 focus:border-r-0">
                            <input class="w-full h-full poppins appearance-none px-5 text-sm border-0" type="number" name="score" placeholder="20">
                        </div>
                        
                        {{--  --}}
                        
                    </div>

                    <div class="flex bg-gray-200">
                        <div class="w-60px flex justify-center items-center border-r border-l border-gray-400">
                            <p class="poppins text-sm">0</p>
                        </div>
                        <div class="w-60px flex justify-center items-center border-r border-gray-400">
                            <p class="poppins text-sm">0</p>
                        </div>
                        <div class="w-60px flex justify-center items-center border-r border-gray-400">
                            <p class="poppins text-sm">0</p>
                        </div>
                    </div>
                </div> 

            </div>
            {{-- @endfor --}}
            {{-- @endforeach --}}
        </div>
    </div>

    <div class="w-full flex items-center py-4">
        <button type="submit" class="poppins text-base text-white bg-[#004080] border border-[#004080] py-2 px-10 rounded">Save</button>
    </div>
</div>

