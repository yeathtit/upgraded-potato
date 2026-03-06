# Contributing to Upgraded Potato

Thank you for taking the time to contribute! The following guidelines help keep the project consistent and the review process smooth.

---

## Table of contents

- [Code of conduct](#code-of-conduct)
- [Getting started](#getting-started)
- [How to contribute](#how-to-contribute)
  - [Reporting bugs](#reporting-bugs)
  - [Requesting features](#requesting-features)
  - [Submitting a pull request](#submitting-a-pull-request)
- [Coding standards](#coding-standards)
- [Commit message format](#commit-message-format)
- [Reviewing pull requests](#reviewing-pull-requests)

---

## Code of conduct

This project follows the [Contributor Covenant Code of Conduct](CODE_OF_CONDUCT.md). Please read it before participating.

---

## Getting started

1. **Fork** the repository on GitHub.
2. **Clone** your fork locally:

   ```bash
   git clone https://github.com/<your-username>/upgraded-potato.git
   cd upgraded-potato
   ```

3. **Create a branch** from `main` with a descriptive name:

   ```bash
   git checkout -b fix/my-bug-fix
   # or
   git checkout -b feat/my-new-feature
   ```

4. **Set up** the project by following the [Setup section in README.md](README.md#setup).

---

## How to contribute

### Reporting bugs

1. Search [existing issues](https://github.com/yeathtit/upgraded-potato/issues) to make sure the bug hasn't already been reported.
2. Open a [bug report](https://github.com/yeathtit/upgraded-potato/issues/new?template=bug_report.md) and fill in all the requested details.

### Requesting features

1. Search [existing issues](https://github.com/yeathtit/upgraded-potato/issues) to avoid duplicates.
2. Open a [feature request](https://github.com/yeathtit/upgraded-potato/issues/new?template=feature_request.md) and describe the problem you want to solve.

### Submitting a pull request

1. Make sure your branch is up-to-date with `main`:

   ```bash
   git fetch origin
   git rebase origin/main
   ```

2. Run any available tests and static analysis locally:

   ```bash
   phpmd . text codesize
   ```

3. **Push** your branch and open a pull request against `main`.
4. Fill in the [pull request template](.github/pull_request_template.md).
5. Respond to review feedback promptly.

---

## Coding standards

- Follow [PSR-12](https://www.php-fig.org/psr/psr-12/) for PHP code.
- Keep functions small and focused on a single responsibility.
- Document public functions and classes with doc-block comments.

---

## Commit message format

Use the following format for commit messages:

```
<type>: <short summary>

[optional body]

[optional footer(s)]
```

Common types: `feat`, `fix`, `docs`, `chore`, `refactor`, `test`.

Example:

```
fix: correct PHPMD report file path

Updated the sarif output path so CI can upload the results correctly.
```

---

## Reviewing pull requests

- Be respectful and constructive.
- Focus feedback on the code, not the author.
- Approve only when you are confident the change is correct and safe.
