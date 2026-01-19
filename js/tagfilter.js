document.addEventListener('DOMContentLoaded', function() {
    const tagButtons = document.querySelectorAll('.tag-btn');
    const sections = document.querySelectorAll('section[data-tags]');
    const dividers = document.querySelectorAll('.divider[data-section]');
    const mains = document.querySelectorAll('main[data-section]');

    function updateSectionVisibility() {
        // Check each section group and hide divider/main if no visible projects
        dividers.forEach(divider => {
            const sectionName = divider.dataset.section;
            const main = document.querySelector(`main[data-section="${sectionName}"]`);
            
            if (main) {
                const visibleProjects = main.querySelectorAll('section[data-tags]:not(.hidden)');
                if (visibleProjects.length === 0) {
                    divider.classList.add('hidden');
                    main.classList.add('hidden');
                } else {
                    divider.classList.remove('hidden');
                    main.classList.remove('hidden');
                }
            }
        });
    }

    tagButtons.forEach(button => {
        button.addEventListener('click', function() {
            const selectedTag = this.dataset.tag;
            
            // Update active button
            tagButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter sections
            sections.forEach(section => {
                if (selectedTag === 'all') {
                    section.classList.remove('hidden');
                } else {
                    const tags = section.dataset.tags.split(' ');
                    if (tags.includes(selectedTag)) {
                        section.classList.remove('hidden');
                    } else {
                        section.classList.add('hidden');
                    }
                }
            });

            // Update section visibility
            updateSectionVisibility();
        });
    });
});
