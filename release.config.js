module.exports = {
    branches: ['main'],
    plugins: [
        '@semantic-release/commit-analyzer', // Analyze commits to determine version
        '@semantic-release/release-notes-generator', // Generate release notes
        '@semantic-release/changelog', // Update CHANGELOG.md
        [
            '@semantic-release/git',
            {
                assets: ['CHANGELOG.md', 'composer.json'],
                message: 'chore(release): ${nextRelease.version} [skip ci]\n\n${nextRelease.notes}',
            },
        ],
    ],
};