document.addEventListener('DOMContentLoaded', function () {
    const poemsData = [
        { title: 'Black', content: "Black, a shade so mysterious.
It can be something depressing or something gorgeous.
Depressing as the heart break from someone you really love,
Or as gorgeous as the starry night sky above."

Black can be quite scary.
It can resemble the feeling of being so empty.
The feeling of being all alone,
And being stuck in a place that is dark and unknown. 

Black also resembles the cold night.
Welcomes us after a long fight during daylight.
Greets us with the cold breeze of the wind
Helps us rest, so that tomorrow we will be, once again, determined. 

Black. Just like my life before I met you.
Everything's pitch black, can't see any beautiful view.
It is a good thing that I met you while searching randomly.
Now, because of you, an angel, everything is bright and so heavenly." },
        { title: 'Poem 2', content: 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' },
     
    ];

    function populatePoemContainers() {
        const poemsSection = document.getElementById('poems-read');

        poemsData.forEach((poem, index) => {
            const poemContainer = document.createElement('div');
            poemContainer.classList.add('poem-container');
			
			const poemBreaks = poem.content.replace(/\n/g, '<br>');
            
            poemContainer.innerHTML = `
                <h3>${poem.title}</h3>
                <p>${poem.content}</p>
            `;

            poemsSection.appendChild(poemContainer);
        });
    }

    
    populatePoemContainers();
});