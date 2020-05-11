CREATE TABLE IF NOT EXISTS test (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    value VARCHAR(255) NOT NULL
);

INSERT INTO test (name, value) VALUES
('foo', 'bar'),
('bar', 'baz'),
('123a', 'bar'),
('123', 'bar');

CREATE TABLE IF NOT EXISTS test_charset (
    id SERIAL PRIMARY KEY,
    field$ VARCHAR(255) NOT NULL,
    field_ VARCHAR(255) NOT NULL
);

INSERT INTO test_charset (field$, field_) VALUES
('foo', 'bar'),
('bar', 'baz');

CREATE TABLE IF NOT EXISTS test_seq (
    id SERIAL,
    foo VARCHAR(255) NOT NULL,
    CONSTRAINT test_seq_pkey PRIMARY KEY (id)
);
