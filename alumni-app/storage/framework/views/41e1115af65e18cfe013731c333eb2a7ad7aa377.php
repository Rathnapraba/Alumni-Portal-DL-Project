

<?php $__env->startSection('content'); ?>
<style>
    /* Your existing styles */
    .job-post {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        position: relative;
    }
    .job-post h3 {
        color: #007bff;
        margin-bottom: 10px;
    }
    .job-post p {
        margin-bottom: 10px;
    }
   .actions {
        margin-top: 20px;
    }
    .comment-section {
        display: none;
        margin-top: 20px;
    }
    .comment-section textarea, .comment-section input {
        width: 90%;
        margin-top: 1px;
        margin-bottom: 5px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    .comment-section button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        margin-bottom: 20px;
        cursor: pointer;
    }
    .comment-section button:hover {
        background-color: #0056b3;
    }
    .sentiment-icons {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        margin-top: 0px;
        margin-bottom: 50px;
    }
    .sentiment-icons span {
        cursor: pointer;
        margin-right: 40px;
    }
    .sentiment-icons img {
        width: 30px;
        height: 30px;
        margin: 0;
    }
    .comment-icon {
        cursor: pointer;
    }
    .comment {
        margin-bottom: 10px;
    }
    .comment-details {
        font-style: italic;
    }
    .comment-email {
        font-weight: bold;
    }
</style>

<br /><br />

<div class="text-center">
    <!-- Your buttons for adding new posts -->
    <a href="<?php echo e(url('/alumnis/create')); ?>" class="btn btn-success btn-sm" title="Add New Job Post">
        <i class="fa fa-plus" aria-hidden="true"></i> Post Job/Internship
    </a>

    <br /><br />

    <a href="<?php echo e(url('/alumnis/blog')); ?>" class="btn btn-success btn-sm" title="Add New Job Post">
        <i class="fa fa-plus" aria-hidden="true"></i> Post Blog
    </a>

    <br /><br />

    <a href="<?php echo e(url('/alumnis/event')); ?>" class="btn btn-success btn-sm" title="Add New Job Post">
        <i class="fa fa-plus" aria-hidden="true"></i> Post Event
    </a>

    <br /><br /><br /><br />
</div>

<?php $__currentLoopData = $alumnis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $alumni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="job-post">
        <h3><?php echo e($alumni->role); ?></h3>
        <p><strong>Company Name:</strong> <?php echo e($alumni->company_name); ?></p>
        <p><strong>Location:</strong> <?php echo e($alumni->location); ?></p>
        <p><strong>Batch:</strong> <?php echo e($alumni->batch); ?></p>
        <p><strong>Description:</strong> <?php echo e($alumni->job_description); ?></p>

        <div class="actions">
            <a href="<?php echo e(url('/alumnis/' . $alumni->id . '/edit')); ?>" title="Edit Job Post" class="btn btn-primary btn-sm">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
            </a>

            <form method="POST" action="<?php echo e(url('/alumnis/' . $alumni->id)); ?>" accept-charset="UTF-8" style="display:inline">
                <?php echo e(method_field('DELETE')); ?>

                <?php echo e(csrf_field()); ?>

                <button type="submit" class="btn btn-danger btn-sm" title="Delete Job Post" onclick="return confirm(&quot;Confirm delete?&quot;)">
                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                </button>
            </form>
        </div>
    </div>

    <div class="sentiment-icons">
        <span class="like-icon"><img src="https://i.pinimg.com/736x/9d/59/05/9d59050ab31c97b10aed9ec2b1bcae20.jpg" alt="Like Icon" data-liked="false"></span>
        <span class="dislike-icon"><img src="https://www.pikpng.com/pngl/m/44-446104_thumbs-down-thumbs-down-white-png-clipart.png" alt="disLike Icon" data-liked="false"></span>
        <span class="heart-icon"><img src="https://i.pinimg.com/736x/98/fc/40/98fc4058a79909e9298fb94c227adade.jpg" alt="Heart Icon" data-hearted="false"></span>
        <span class="comment-icon" onclick="toggleCommentSection(this)"><img src="https://cdn-icons-png.flaticon.com/512/1380/1380338.png" alt="Comment Icon"></span>    
    </div>
    <div class="comment-section">
        <input type="text" class="name-input" placeholder="Your Name">
        <input type="email" class="email-input" placeholder="Your Email">
        <textarea class="comment-input" placeholder="Write your comment here..."></textarea>
        <button type="button" class="btn btn-primary submit-comment" data-post-id="<?php echo e($index); ?>">Submit Comment</button>
        <div class="comments-container" data-post-id="<?php echo e($index); ?>"></div>
    </div>
    
    
    <div id="sentiment-counts-<?php echo e($index); ?>">
        <p>Total Likes: <span id="like-count-<?php echo e($index); ?>">0</span></p>
        <p>Total Dislikes: <span id="dislike-count-<?php echo e($index); ?>">0</span></p>
        <p>Total Hearts: <span id="heart-count-<?php echo e($index); ?>">0</span></p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<script>
    // Function to toggle comment section visibility
    function toggleCommentSection(icon) {
        const commentSection = icon.parentElement.nextElementSibling;
        if (commentSection.style.display === 'none' || commentSection.style.display === '') {
            commentSection.style.display = 'block';
        } else {
            commentSection.style.display = 'none';
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Initialize arrays to store counts for each post
        let likeCounts = [];
        let dislikeCounts = [];
        let heartCounts = [];

        // Function to update counts and display for a specific post
        function updateCounts(postIndex) {
            document.getElementById('like-count-' + postIndex).textContent = likeCounts[postIndex];
            document.getElementById('dislike-count-' + postIndex).textContent = dislikeCounts[postIndex];
            document.getElementById('heart-count-' + postIndex).textContent = heartCounts[postIndex];
        }

        // Initialize counts for each post
        document.querySelectorAll('.job-post').forEach((post, index) => {
            likeCounts[index] = 0;
            dislikeCounts[index] = 0;
            heartCounts[index] = 0;
        });

        // Like Icon Toggle
        document.querySelectorAll('.like-icon img').forEach((icon, index) => {
            icon.addEventListener('click', function() {
                if (this.dataset.liked === "false") {
                    likeCounts[index]++;
                    this.src = "https://banner2.cleanpng.com/20180716/rs/kisspng-thumb-signal-emoji-domain-emoticon-emojipedia-like-emoji-5b4c1d64c627a7.7038509215317149168117.jpg"; // Path to your liked state icon
                    this.dataset.liked = "true";
                } else {
                    likeCounts[index]--;
                    this.src = "https://i.pinimg.com/736x/9d/59/05/9d59050ab31c97b10aed9ec2b1bcae20.jpg"; // Path back to original like icon
                    this.dataset.liked = "false";
                }
                updateCounts(index);
            });
        });

        // Dislike Icon Toggle
        document.querySelectorAll('.dislike-icon img').forEach((icon, index) => {
            icon.addEventListener('click', function() {
                if (this.dataset.disliked === "false") {
                    dislikeCounts[index]++;
                    this.src = "https://static-00.iconduck.com/assets.00/thumbs-down-emoji-emoji-457x512-ygbar5af.png"; // Disliked icon
                    this.dataset.disliked = "true";
                } else {
                    if (dislikeCounts[index] > 0) {
                        dislikeCounts[index]--;
                    }
                    this.src = "https://www.pikpng.com/pngl/m/44-446104_thumbs-down-thumbs-down-white-png-clipart.png"; // Default dislike icon
                    this.dataset.disliked = "false";
                }
                updateCounts(index);
            });
        });

        // Heart Icon Toggle
        document.querySelectorAll('.heart-icon img').forEach((icon, index) => {
            icon.addEventListener('click', function() {
                if (this.dataset.hearted === "false") {
                    heartCounts[index]++;
                    this.src = "https://i2-prod.ok.co.uk/incoming/article14417265.ece/ALTERNATES/s615b/1126932_loveheart1_10efefc814c6c12a683e8c488d9ead5d";
                    this.dataset.hearted = "true";
                } else {
                    heartCounts[index]--;
                    this.src = "https://i.pinimg.com/736x/98/fc/40/98fc4058a79909e9298fb94c227adade.jpg";
                    this.dataset.hearted = "false";
                }
                updateCounts(index);
            });
        });


        // Function to update comments for a specific post
function updateComments(postId) {
    const commentsContainer = document.querySelector(`.comments-container[data-post-id="${postId}"]`);
    commentsContainer.innerHTML = ''; // Clear existing comments

    // Get comments from localStorage
    const comments = JSON.parse(localStorage.getItem(`comments-${postId}`)) || [];

    // Display each comment
    comments.forEach(comment => {
        const commentElement = document.createElement('div');
        commentElement.classList.add('comment');
        commentElement.innerHTML = `
        <p class="comment-details"><span class="comment-name">${comment.name}</span> (<span class="comment-email">${comment.email}</span>): ${comment.text}</p>
        `;
        commentsContainer.appendChild(commentElement);
    });
}


        // Submit Comment
     document.querySelectorAll('.submit-comment').forEach(button => {
            button.addEventListener('click', function() {
                const name = this.parentElement.querySelector('.name-input').value.trim();
                const email = this.parentElement.querySelector('.email-input').value.trim();
                const commentText = this.parentElement.querySelector('.comment-input').value.trim();
                const postId = this.parentElement.querySelector('.comments-container').getAttribute('data-post-id');

                if (name !== '' && email !== '' && commentText !== '') {
                    const comment = { name, email, text: commentText };
                    const comments = JSON.parse(localStorage.getItem(`comments-${postId}`)) || [];
                    comments.push(comment);
                    localStorage.setItem(`comments-${postId}`, JSON.stringify(comments));
                    updateComments(postId);

                    // Clear input fields after submission
                    this.parentElement.querySelector('.name-input').value = '';
                    this.parentElement.querySelector('.email-input').value = '';
                    this.parentElement.querySelector('.comment-input').value = '';
                } else {
                    alert('Please fill in all fields.');
                }
            });
        });

        // Initialize counts on load
        document.querySelectorAll('.job-post').forEach((post, index) => {
            updateCounts(index);
        });
    });

//     button.addEventListener('click', function() {
//     const name = this.parentElement.querySelector('.name-input').value.trim();
//     const email = this.parentElement.querySelector('.email-input').value.trim();
//     const commentText = this.parentElement.querySelector('.comment-input').value.trim();
//     const postId = this.parentElement.querySelector('.comments-container').getAttribute('data-post-id');

//     if (name && email && commentText) {
//         const comment = { name, email, text: commentText };
//         try {
//             const comments = JSON.parse(localStorage.getItem(`comments-${postId}`)) || [];
//             comments.push(comment);
//             localStorage.setItem(`comments-${postId}`, JSON.stringify(comments));
//             updateComments(postId);
//         } catch (error) {
//             console.error('Failed to save or parse comments', error);
//         }

//         // Clear input fields after submission
//         this.parentElement.querySelectorAll('input, textarea').forEach(input => input.value = '');
//     } else {
//         alert('Please fill in all fields.');
//     }
// });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\N RATHNA PRABA\alumni-app\resources\views/alumnis/index.blade.php ENDPATH**/ ?>