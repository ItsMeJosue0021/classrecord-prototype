<div id="quarterly" class="hidden w-full ">

    <x-qa-config />

    <div class="w-full border border-gray-400">
        {{-- row 2 --}}
        <div class="w-full flex border-t border-b border-gray-400 bg-gray-100">
            <div class="w-1/4 flex justify-center items-center py-2 border-r border-gray-400">
                <p class="poppins text-sm">ACTIVITY NO.</p>
            </div>
            
            <div class="w-3/4 flex justify-between border-gray-400">
                <div class="flex">
                    {{-- loop the table activity and show the max score each --}}
                    <x-qa-activity-number />
                    <x-qa-activity-number />
                    <x-qa-activity-number />
                    <x-qa-activity-number />
                    <x-qa-activity-number />
                    <x-qa-activity-number />
                    {{--  --}}
                </div>

                <div class="flex">
                    <div class="w-[60px] flex justify-center items-center border-r border-l border-gray-400">
                        <p class="poppins text-xs font-medium">TOTAL</p>
                    </div>
                    <div class="w-[60px] flex justify-center items-center border-r border-gray-400">
                        <p class="poppins text-xs font-medium">PS</p>
                    </div>
                    <div class="w-[60px] flex justify-center items-center border-r border-gray-400">
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
                    <x-qa-highest-possible-score />
                    <x-qa-highest-possible-score />
                    <x-qa-highest-possible-score />
                    <x-qa-highest-possible-score />
                    <x-qa-highest-possible-score />
                    <x-qa-highest-possible-score />
                    {{--  --}}

                </div>

                <div class="flex">
                    <div class="w-[60px] flex justify-center items-center border-r border-l border-gray-400">
                        <p class="poppins text-sm">0</p>
                    </div>
                    <div class="w-[60px] flex justify-center items-center border-r border-gray-400">
                        <p class="poppins text-sm">0</p>
                    </div>
                    <div class="w-[60px] flex justify-center items-center border-r border-gray-400">
                        <p class="poppins text-sm">0</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- row 4 --}}
        <div>
            {{-- @foreach ($students as $student) --}}
                
            <x-qa-student-row />
            <x-qa-student-row />
            <x-qa-student-row />
            <x-qa-student-row />
            <x-qa-student-row />
            <x-qa-student-row />
            <x-qa-student-row />
            <x-qa-student-row />
            <x-qa-student-row />
            <x-qa-student-row />

            {{-- @endfor --}}
            {{-- @endforeach --}}
        </div>
    </div>
</div>