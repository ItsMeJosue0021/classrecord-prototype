<x-app-layout>
        <section class="w-full flex items-start relative ">
            <div class="w-full h-660px flex flex-col items-start p-4 overflow-auto">
                {{-- <div class="pb-2">
                    <a id="back" class="flex w-fit justify-start items-center space-x-2 group rounded cursor-pointer" href="/classes">
                        <i class='bx bx-left-arrow-alt text-gray-600 text-2xl group-hover:text-red-700'></i>
                        <p class="poppins text-base text-gray-600 group-hover:text-red-700">back</p>
                    </a>
                </div> --}}
                <form action="" class="w-full">
                    {{-- Evaluations --}}
                    <x-evaluations :evaluations="$evaluations" />
    
                    <div class="eval-container">
                        <x-written-works :students="$students" :activities="$wr_activities"/>
                        <x-performance-task />
                        <x-quarterly-assessment />
                        <x-final-grade />   
                    </div>
                </form>
            </div>
    
            <div id="written-modal" class="hidden">
                <div class="flex w-full absolute top-0 left-0 pt-40 items-center justify-center">
                    <div class="w-96 h-fit rounded-md bg-white shadow-2xl bg-gradient-to-b from-gray-100 to-white">
                        <form class="flex flex-col space-y-3 py-4 px-6" action="{{route('activity.store')}}" method="post">
                            @csrf
                            <div>
                                <h1 class="poppins font-semibold">CREATE NEW ACTIVITY</h1>
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label class="poppins text-sm" for="">Name</label>
                                <input class="poppins text-sm py-2 px-4 rounded border border-gray-300" type="text" name="name">
                            </div>
                            <div class="flex flex-col space-y-1">
                                <label class="poppins text-sm" for="">Highest Possible Score</label>
                                <input type="number" min="0" class="poppins text-sm py-2 px-4 rounded border border-gray-300" name="max_score" >
                            </div>
                            <input type="hidden" name="evaluation_criteria_id" value="1">
                            <div class="flex items-center justify-end space-x-4 pt-2">
                                <button type="submit" class="poppins text-sm text-white bg-[#004080] border border-[#004080] py-2 px-6 rounded">Save</button>
                                <a id="written-act-cancel" class="poppins cursor-pointer px-6 py-2 hover:bg-gray-200 rounded">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>  {{-- bg-black bg-opacity-5 --}}
            </div>
    
            <div id="pt-modal" class="hidden w-full h-full absolute top-0 left-0  pt-40 justify-center bg-black bg-opacity-5">
                <div class="w-96 h-fit rounded-md bg-white">
                    <form class="flex flex-col space-y-3 py-4 px-6" action="">
                        <div>
                            <h1 class="poppins font-semibold">New Performace Task</h1>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label class="poppins text-xs" for="">TITLE</label>
                            <input class="poppins text-sm px-4 rounded" type="text">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label class="poppins text-xs" for="">HIGHEST POSSIBLE SCORE</label>
                            <input class="poppins text-sm px-4 rounded" type="text">
                        </div>
                        <div class="flex items-center justify-end space-x-4 pt-2">
                            <button class="poppins py-2 px-4 bg-blue-400 text-white hover:bg-blue-500 rounded">Save</button>
                            <a id="pt-act-cancel" class="poppins cursor-pointer hover:text-red-500">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
    
            <div id="assessment-modal" class="hidden w-full h-full absolute top-0 left-0  pt-40 justify-center bg-black bg-opacity-5">
                <div class="w-96 h-fit rounded-md bg-white">
                    <form class="flex flex-col space-y-3 py-4 px-6" action="">
                        <div>
                            <h1 class="poppins font-semibold">New Assessment</h1>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label class="poppins text-xs" for="">TITLE</label>
                            <input class="poppins text-sm px-4 rounded" type="text">
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label class="poppins text-xs" for="">HIGHEST POSSIBLE SCORE</label>
                            <input class="poppins text-sm px-4 rounded" type="text">
                        </div>
                        <div class="flex items-center justify-end space-x-4 pt-2">
                            <button class="poppins py-2 px-4 bg-blue-400 text-white hover:bg-blue-500 rounded">Save</button>
                            <a id="assessment-cancel" class="poppins cursor-pointer hover:text-red-500">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
    
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                
                const evalnavItems = document.querySelectorAll('.evalnav');
            
                evalnavItems.forEach((item) => {
                    item.addEventListener('click', function() {
                        evalnavItems.forEach((navItem) => navItem.classList.remove('active-eval'));
                        this.classList.add('active-eval');
            
                        const h1Text = this.querySelector('h1').textContent;
                        const sections = ['performance', 'quarterly', 'written', 'final'];
            
                        sections.forEach((section) => {
                            const element = document.getElementById(section);
                            if (h1Text.toUpperCase().includes(section.toUpperCase())) {
                                sections.forEach((otherSection) => {
                                    if (otherSection !== section) {
                                        document.getElementById(otherSection).classList.add('hidden');
                                    }
                                });
                                element.classList.remove('hidden');
                            } else {
                                element.classList.add('hidden');
                            }
                        });
                    });
                });

                const showModal = (modal) => modal.classList.remove('hidden');
                const hideModal = (modal) => modal.classList.add('hidden');
            
                const modals = [
                    { buttonId: 'new-written-act', modalId: 'written-modal', cancelId: 'written-act-cancel' },
                    { buttonId: 'new-pt-act', modalId: 'pt-modal', cancelId: 'pt-act-cancel' },
                    { buttonId: 'new-assessment', modalId: 'assessment-modal', cancelId: 'assessment-cancel' }
                ];
            
                modals.forEach(({ buttonId, modalId, cancelId }) => {
                    const newBtn = document.getElementById(buttonId);
                    const modal = document.getElementById(modalId);
                    const cancel = document.getElementById(cancelId);
            
                    newBtn.addEventListener('click', () => showModal(modal));
                    cancel.addEventListener('click', () => hideModal(modal));
                });
            });
        </script>
        
    
   

</x-app-layout>