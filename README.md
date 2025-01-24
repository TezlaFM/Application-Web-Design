## Tagging Options in Markdown

Markdown provides a simple syntax for tagging and formatting text. Here are some commonly used tags and their purposes:

### Headings
Use `#` symbols followed by a space to create headings. The number of `#` symbols determines the heading level.

```markdown
# Heading 1
## Heading 2
### Heading 3
#### Heading 4
##### Heading 5
###### Heading 6
```

### Text Formatting
- **Bold**: `**text**` or `__text__`
- *Italic*: `*text*` or `_text_`
- ***Bold and Italic***: `***text***`
- ~~Strikethrough~~: `~~text~~`

### Lists
- Unordered lists: Use `-`, `+`, or `*` followed by a space.
  ```markdown
  - Item 1
  - Item 2
    - Sub-item 1
    - Sub-item 2
  ```
- Ordered lists: Use numbers followed by a period.
  ```markdown
  1. Item 1
  2. Item 2
     1. Sub-item 1
     2. Sub-item 2
  ```

### Links and Images
- Links: `[Link text](URL)`
- Images: `![Alt text](Image URL)`

### Code Blocks
- Inline code: Use backticks \`code\`
- Block code:
  ```markdown
  ```language
  Code here
  ```
  ```

### Tables
Use pipes (`|`) and hyphens (`-`) to create tables.
```markdown
| Column 1 | Column 2 | Column 3 |
|----------|----------|----------|
| Data 1   | Data 2   | Data 3   |
```

### Blockquotes
Use `>` followed by a space for blockquotes.
```markdown
> This is a blockquote.
```

### Horizontal Lines
Use three or more `-`, `*`, or `_` on a new line.
```markdown
---
```

## Common Git Commands

Here is a list of commonly used Git commands to manage repositories effectively:

### Check the Status of a Local Repository
```bash
git status
```

### Add Files to Staging Area
- Add individual files:
  ```bash
  git add <filename>
  ```
- Add all files:
  ```bash
  git add .
  ```

### Add Comments to the Commit
```bash
git commit -m "Your commit message here"
```

### Upload Changes to the Remote Repository
```bash
git push origin <branch-name>
```

### Manage Branches
- Create a branch:
  ```bash
  git branch <branch-name>
  ```
- Switch to a branch:
  ```bash
  git checkout <branch-name>
  ```
- Delete a branch:
  ```bash
  git branch -d <branch-name>
  ```
- List all branches:
  ```bash
  git branch
  ```

### Roll Back a Repository to a Specific Commit
- Reset to a specific commit:
  ```bash
  git reset --hard <commit-hash>
  ```
- Revert a commit:
  ```bash
  git revert <commit-hash>
  ```

