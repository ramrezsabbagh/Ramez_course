const fs = require('fs');
const { JSDOM } = require('jsdom');
const { validateForm } = require('../scripts.js');

describe('Responsive design', () => {
  test('index.html contains viewport meta tag', () => {
    const html = fs.readFileSync('index.html', 'utf8');
    const dom = new JSDOM(html);
    const meta = dom.window.document.querySelector('meta[name="viewport"]');
    expect(meta).not.toBeNull();
  });

  test('styles.css contains media query', () => {
    const css = fs.readFileSync('styles.css', 'utf8');
    expect(css).toMatch(/@media \(max-width: 600px\)/);
  });
});

describe('Navigation', () => {
  test('navigation links exist', () => {
    const html = fs.readFileSync('index.html', 'utf8');
    const dom = new JSDOM(html);
    const links = Array.from(dom.window.document.querySelectorAll('#nav-links li a'));
    const hrefs = links.map(l => l.getAttribute('href'));
    expect(hrefs).toEqual(['about.html', 'services.html', 'contact.html']);
  });
});

describe('Form validation', () => {
  test('invalid form returns false', () => {
    const form = { name: { value: '' }, email: { value: 'bad' }, message: { value: '' } };
    expect(validateForm(form)).toBe(false);
  });

  test('valid form returns true', () => {
    const form = { name: { value: 'A' }, email: { value: 'a@b.com' }, message: { value: 'hi' } };
    expect(validateForm(form)).toBe(true);
  });
});
