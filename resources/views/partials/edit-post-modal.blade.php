<!-- Modal -->
<div id="editPostModal" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-black bg-opacity-50 transition-opacity duration-300 ease-in-out opacity-0" aria-hidden="true">
    <div class="bg-white rounded-lg p-6 w-11/12 md:w-1/2 transform scale-95 transition-transform duration-300 ease-in-out" id="modalContent">
        <h2 class="text-lg font-bold mb-4">Edit Your Barta</h2>
        <form id="editPostForm" action="{{ route('posts.update', 'post_id') }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="post_id" id="post_id">
            <div class="mb-4">
                <textarea name="content" id="content" rows="4" class="block w-full p-2 pt-2 text-gray-900 rounded-lg border-2 border-black outline-none focus:ring-0 focus:ring-offset-0 hide-scrollbar"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="button" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-full text-xs px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" onclick="closeModal()">Cancel</button>
                <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-full text-xs px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                    Update
                </button>
            </div>
        </form>
    </div>
</div>


<script>
    function openModal(postId, content) {
        document.getElementById('post_id').value = postId;
        document.getElementById('content').value = content;
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