# Lorem Ipsum Generator

This is a simple PHP function that generates Lorem Ipsum text. Lorem Ipsum is placeholder text commonly used in the printing and typesetting industry.

## Usage

You can use the `LoremIpsum` function to generate Lorem Ipsum text in two different formats: as a single sentence or as paragraphs.

### Generate a Sentence

To generate a single sentence of Lorem Ipsum, you can use the following code:

```php
LoremIpsum('sentence');


This will return: "Lorem ipsum dolor sit amet, consectetuer adipiscing elit."

#  Generate Paragraphs
To generate paragraphs of Lorem Ipsum, you can use the following code:

```php
 LoremIpsum('paragraphs', $num);

Replace $num with the number of paragraphs you want to generate.
If you don't specify the number of paragraphs, the function will return a single paragraph of Lorem Ipsum text.

# Example
Here's an example of how to use the LoremIpsum function to generate three paragraphs of Lorem Ipsum:

```php
$LoremIpsumText = LoremIpsum('paragraphs', 3);
echo $LoremIpsumText;

This will output:

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac lacus lectus. Duis ultrices bibendum tristique. Etiam vel est porta turpis hendrerit placerat at non mauris. Maecenas augue odio, dapibus eget auctor sit amet, rutrum nec nisl. Praesent tincidunt adipiscing auctor. Sed sollicitudin lobortis arcu, sit amet malesuada mi auctor varius. Duis eleifend pretium felis quis lobortis. Nam posuere arcu quis magna vestibulum nec pellentesque enim imperdiet. Aenean nunc augue, sodales varius molestie faucibus, tincidunt a odio. Curabitur cursus ante metus. Fusce tristique ante id magna rhoncus lobortis a sit amet risus.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac lacus lectus. Duis ultrices bibendum tristique. Etiam vel est porta turpis hendrerit placerat at non mauris. Maecenas augue odio, dapibus eget auctor sit amet, rutrum nec nisl. Praesent tincidunt adipiscing auctor. Sed sollicitudin lobortis arcu, sit amet malesuada mi auctor varius. Duis eleifend pretium felis quis lobortis. Nam posuere arcu quis magna vestibulum nec pellentesque enim imperdiet. Aenean nunc augue, sodales varius molestie faucibus, tincidunt a odio. Curabitur cursus ante metus. Fusce tristique ante id magna rhoncus lobortis a sit amet risus.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac lacus lectus. Duis ultrices bibendum tristique. Etiam vel est porta turpis hendrerit placerat at non mauris. Maecenas augue odio, dapibus eget auctor sit amet, rutrum nec nisl. Praesent tincidunt adipiscing auctor. Sed sollicitudin lobortis arcu, sit amet malesuada mi auctor varius. Duis eleifend pretium felis quis lobortis. Nam posuere arcu quis magna vestibulum nec pellentesque enim imperdiet. Aenean nunc augue, sodales varius molestie faucibus, tincidunt a odio. Curabitur cursus ante metus. Fusce tristique ante id magna rhoncus lobortis a sit amet risus.

# License
This project is licensed under the MIT License. See the LICENSE file for details.
