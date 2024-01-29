# Personal Information

- **Name:** María José Félix Inclán
- **Registration Number:** 3008332
- **Degree:** Software Engineering
- **Semester:** 6

# Course Information

- **Subject Name:** Application Web Design
- **Professor:** Julio César Mendoza Vera

# What is Markdown used for?

Markdown is a *lightweight markup language* that is primarily used for formatting and structuring plain text documents. It was designed to be easy to read and is often used in technical documentation for software libraries.

# Tagging options Markdown offers

Markdown offers a variety of tagging or syntax options to format text, create lists, insert links and images, and more.

## Headings

Use # symbols before your text to create headings. The number of # symbols indicates the level of the heading. For example, `## Heading 2`

## Emphasis

- Bold: Wrap text with `**` oor `__` (double asterisks or underscores) to make it bold.
- Italics: Wrap text with `*` or `_` (single asterisk or underscore) to italicize it.

## Lists

- Unordered Lists: Use `*`, `-`, or `+` for bullet points.
- Ordered Lists: Use numbers followed by a period.

## Links

- `[Link text](URL)` creates a hyperlink.

## Images

- `![Alt text](Image URL)` to insert an image.

## Most used commands in Git

### Check the status of a local repository

- Command: `git status`
- Description: Displays the state of the working directory and staging area. It lets you see which changes have been staged, which haven't, and which files aren't being tracked by Git.

### Add individual files or globally

- For individual files: `git add <filename>`
- For all files (globally): `git add .`
- Description: The `git add` command adds changes in the working directory to the staging area. It tells Git you want to include updates to a particular file in the next commit.

### Add comments to the commit

- Command: `git commit -m "Your commit message"`
- Description: Records or snapshots the file permanently in the version history with the provided message as a description.

### Upload your changes to the remote repository

- Command: `git push <remote> <branch>`
- Description: Uploads all local branch commits to the specified remote branch. Replace `<remote>` with the remote name (usually origin) and `<branch>` with your branch name (like main or master).

### Create, browse, and delete branches

#### Create a new branch

- `git branch <branchname>`

#### Browse branches

- `git branch or git branch --list`

#### Delete a branch
- Local branch: `git branch -d <branchname>` (safe delete, doesn't delete if there are unmerged changes)
- Remote branch: `git push <remote> --delete <branchname>`

### Roll back a repository to a specific commit:

- Command: `git reset --hard <commit>`
- Description: Resets the index and working tree to the specified commit. Any changes to tracked files in the working tree since the specified commit are discarded. Replace `<commit>` with the commit hash.

