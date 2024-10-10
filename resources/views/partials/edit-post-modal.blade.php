<!-- Modal -->
<div id="editPostModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50 transition-opacity duration-300 ease-in-out opacity-0" aria-hidden="true">
    <div class="bg-white rounded-lg p-6 w-11/12 md:w-1/2 transform scale-95 transition-transform duration-300 ease-in-out" id="modalContent">
        <h2 class="text-lg font-bold mb-4">Edit Your Barta</h2>
        <form id="editPostForm" action="{{ route('posts.update', 'post_id') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="post_id" id="post_id">
            <div class="mb-4">
                <textarea name="content" id="content" rows="4" class="block w-full p-2 pt-2 text-gray-900 rounded-lg border-2 border-black outline-none focus:ring-0 focus:ring-offset-0 hide-scrollbar"></textarea>
            </div>

            <div id="previewEditContainer" class="relative hidden mb-4">
                <img id="imageEditPreview" class="min-h-auto w-full rounded-lg object-cover max-h-64 md:max-h-72" />
                <button id="removeEditImage" type="button" class="absolute top-0 right-0 bg-red-500 text-white p-1 h-[30px] w-[30px] rounded-[7px]">
                    ✕
                </button>
            </div>

            <input type="file" name="picture" id="editPicture" class="hidden" accept="image/*" />
            <label for="editPicture" class="-m-2 flex gap-2 text-xs items-center rounded-full p-2 text-gray-600 hover:text-gray-800 cursor-pointer">
                <span class="sr-only">Picture</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                </svg>
            </label>

            <div class="flex justify-end">
                <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-xs px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" onclick="closeModal()">Cancel</button>
                <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-xs px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>

@push('scripts')
    <script>
        function openModal(postId, content, imgSrc=null) {
            document.getElementById('post_id').value = postId;
            document.getElementById('content').value = content;
            if (imgSrc) {
                const imagePath = "{{ asset('storage') }}/" + imgSrc;
                document.getElementById('previewEditContainer').classList.remove('hidden');
                document.getElementById('imageEditPreview').src = imagePath;
            } else {
                document.getElementById('previewEditContainer').classList.add('hidden');
            }

            document.getElementById('editPostForm').action = "{{ url('posts') }}/" + postId;
            const modal = document.getElementById('editPostModal');
            const modalContent = document.getElementById('modalContent');

            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.remove('opacity-0');
                modal.classList.add('opacity-100');
                modalContent.classList.remove('scale-95');
            }, 10);
        }

        function closeModal() {
            const modal = document.getElementById('editPostModal');
            const modalContent = document.getElementById('modalContent');

            modalContent.classList.add('scale-95');
            modal.classList.add('opacity-0');

            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }
    </script>
    <script>
        document.getElementById('editPicture').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const preview = document.getElementById('imageEditPreview');
            const previewContainer = document.getElementById('previewEditContainer');

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                previewContainer.classList.add('hidden');
            }
        });
        
        document.getElementById('removeEditImage').addEventListener('click', function() {
            document.getElementById('imageEditPreview').src = '';
            document.getElementById('previewEditContainer').classList.add('hidden');
            document.getElementById('editPicture').value = '';
        });
    </script>
@endpush

