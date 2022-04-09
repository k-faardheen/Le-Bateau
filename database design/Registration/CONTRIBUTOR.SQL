CREATE TABLE CONTRIBUTOR(
    Contributor_Id VARCHAR(7) NOT NULL,
    PRIMARY KEY(Contributor_Id),
    Registration_id varchar(5),
    FOREIGN KEY (Registration_id) REFERENCES REGISTRATION(Registration_ID)
)

--populate to CONTRIBUTOR TABLE

INSERT INTO CONTRIBUTOR (Contributor_Id, Registration_ID)
VALUES  ('CON003', 'R003'),
        ('CON004', 'R004'),
        ('CON005', 'R005'),
        ('CON006', 'R006'),
        ('CON007', 'R007'),
        ('CON008', 'R008'),
        ('CON009', 'R009'),
        ('CON010', 'R010'),
        ('CON011', 'R011'),
        ('CON012', 'R012'),
        ('CON013', 'R013'),
        ('CON014', 'R014'),
        ('CON015', 'R015'),
        ('CON016', 'R016'),
        ('CON017', 'R017'),
        ('CON018', 'R018');